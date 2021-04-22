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
          <img :src="blog.image" :alt="blog.title" />
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
    <infinite-loading @infinite="infiniteLoadingHandler" :identifier="infiniteId" spinner="spiral">
      <div slot="no-more"></div>
      <div slot="no-results">無資料</div>
    </infinite-loading>
  </div>
</template>

<script>
import InfiniteLoading from "vue-infinite-loading";
import moment from "moment";
import { Blog } from "@/js/api";

export default {
  name: "BlogList",
  components: {
    InfiniteLoading,
  },
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
      }).then((response) => {
        this.lastIndex = response.lastIndex;
        if (this.lastIndex) {
          this.blogs.push(...response.list);
          $state.loaded();
        } else {
          $state.complete();
        }
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
          document.title = `${title} | 禾場國際芳療學苑`;
          this.$route.meta.title = title;
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