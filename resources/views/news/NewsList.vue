<template>
  <section class="container news_list">
    <div class="index_news">
      <ul class="news_block">
        <li v-for="news in data" :key="news.id">
          <router-link :to="`/news/${news.id}`" class="news_box" :title="news.title">
            <div class="time">
              <span class="month">{{ month(news.createdAt) }}</span>
              <span class="date">{{ day(news.createdAt) }}</span>
              <span class="year">{{ year(news.createdAt) }}</span>
            </div>
            <div class="news_title">
              <div class="category">
                {{ `${news.category.name}公告` }}
              </div>
              <h5>{{ news.title }}</h5>
            </div>
          </router-link>
        </li>
      </ul>
    </div>
    <infinite-loading @infinite="infiniteLoadingHandler" :identifier="infiniteId" />
  </section>
</template>

<script>
import moment from "moment";
import { News } from "@/js/api";

export default {
  name: "NewsList",
  inject: ["setTitle"],
  props: {
    search: {
      Type: String,
      default: "",
    },
    categories: {
      type: Array,
      default: [],
    },
  },
  data: () => ({
    lastIndex: null,
    data: [],
    infiniteId: +new Date(),
  }),
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
    this.infiniteLoadingHandler = window._.debounce(this.getNewsList, 100);
  },
  watch: {
    search: function () {
      this.onSearch();
    },
    categories: {
      immediate: true,
      handler() {
        this.updateTitleAndBreadCrumbs();
      },
    },
    $route: {
      immediate: true,
      handler(to, from) {
        this.updateTitleAndBreadCrumbs();
      },
    },
  },
  methods: {
    year(date) {
      return moment(date).format("YYYY");
    },
    month(date) {
      return moment(date).format("MM");
    },
    day(date) {
      return moment(date).format("DD");
    },
    getNewsList($state) {
      News.getList({
        lastIndex: this.lastIndex,
        search: this.search,
        category: this.$route.params.id,
      })
        .then((response) => {
          this.lastIndex = response.lastIndex;
          if (this.lastIndex) {
            this.data.push(...response.list);
            $state.loaded();
          } else {
            $state.complete();
          }
        })
        .catch(() => {
          this.$router.push({ name: "newsCategory404" });
        });
    },
    onSearch() {},
    infiniteLoadingHandler() {},
    resetInfiniteLoading() {
      this.lastIndex = null;
      this.data = [];
      this.infiniteId += 1;
    },
    updateTitleAndBreadCrumbs() {
      if (this.$route.params.id) {
        const category = this.$props.categories.find((category) => {
          return category.id == this.$route.params.id;
        });
        let title = null;
        if (category != undefined) {
          title = category.name;
        } else {
          title = "所有公告";
        }
        this.$route.meta.title = title;
        this.setTitle(title);
      }
    },
  },
};
</script>