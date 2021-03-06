<template>
  <div>
    <section class="container blog_list">
      <router-link
        v-for="blog in blogs"
        class="article_box"
        :key="blog.id"
        :to="`/blog/${blog.id}`"
        :title="blog.title"
      >
        <figure>
          <img v-lazy="blog.image" :alt="blog.title" />
          <span class="category">{{ blog.category.name }}</span>
        </figure>
        <div class="article_text">
          <h2 class="title">{{ blog.title }}</h2>
          <div class="preview">
            {{ removeHTMLTag(blog.content) }}
          </div>
        </div>
        <div class="article_date">{{ datetimeFormat(blog.createdAt) }}</div>
      </router-link>
    </section>
    <section class="container container_infinite">
      <infinite-loading @infinite="infiniteLoadingHandler" :identifier="infiniteId" />
    </section>
  </div>
</template>

<script>
import moment from "moment";
import { Blog } from "@/js/api";

export default {
  name: "BlogList",
  inject: ["setTitle"],
  props: {
    search: {
      Type: String,
      default: null,
    },
    categories: {
      Type: Array,
      default: [],
    },
  },
  data: () => ({
    lastIndex: null,
    blogs: [],
    infiniteId: +new Date(),
  }),
  watch: {
    search: function () {
      this.onSearch();
    },
    $route: {
      immediate: true,
      handler(to, from) {
        this.updateTitleAndBreadCrumbs();
      },
    },
  },
  created() {
    this.onSearch = window._.debounce(() => {
      if (this.$route.query.search != this.search) {
        if (this.search) {
          this.$router.push({ query: { search: this.search } });
        } else {
          this.$router.push({ query: {} });
        }
        this.resetInfiniteLoading();
      }
    }, 500);
    // Fix: Event "infinite" called twice when in tabs and scroll position is not 0
    this.infiniteLoadingHandler = window._.debounce(this.getBlogs, 100);
  },
  methods: {
    getBlogs($state) {
      Blog.getList({
        lastIndex: this.lastIndex,
        search: this.search,
        category: this.$route.params.id,
        keyword: this.$route.query.keyword,
      })
        .then((response) => {
          this.lastIndex = response.lastIndex;
          if (this.lastIndex) {
            this.blogs.push(...response.list);
            $state.loaded();
          } else {
            $state.complete();
          }
        })
        .catch(() => {
          this.$router.push({ name: "blogCategory404" });
        });
    },
    onSearch() {},
    infiniteLoadingHandler() {},
    resetInfiniteLoading() {
      this.lastIndex = null;
      this.blogs = [];
      this.infiniteId += 1;
    },
    updateTitleAndBreadCrumbs() {
      if (this.$route.params.id) {
        const category = this.$props.categories.find((category) => {
          return category.id == this.$route.params.id;
        });
        if (category != undefined) {
          const title = `${category.name}`;
          this.$route.meta.title = title;
          this.setTitle(title);
        }
      }
    },
    datetimeFormat(datetime) {
      return moment(datetime).format("YYYY-MM-DD");
    },
    removeHTMLTag(html) {
      let tmp = document.createElement("div");
      tmp.innerHTML = html;
      return tmp.textContent || tmp.innerText || "";
    },
  },
};
</script>