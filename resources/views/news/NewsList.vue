<template>
  <section class="container news_list">
    <div class="index_news">
      <ul class="news_block">
        <li v-for="news in data" :key="news.id">
          <router-link
            :to="`/news/${news.id}`"
            class="news_box"
            :title="news.title"
          >
            <div class="time">
              <span class="month">{{ month(news.created_at) }}</span>
              <span class="date">{{ day(news.created_at) }}</span>
              <span class="year">{{ year(news.created_at) }}</span>
            </div>
            <div class="news_title">
              <div class="category">
                {{ `${categoriesMapping[news.category]}公告` }}
              </div>
              <h5>{{ news.title }}</h5>
            </div>
          </router-link>
        </li>
      </ul>
    </div>
    <infinite-loading
      @infinite="getNewsList"
      :identifier="infiniteId"
      spinner="spiral"
    >
      <div slot="no-more"></div>
      <div slot="no-results">無資料</div>
    </infinite-loading>
  </section>
</template>

<script>
import InfiniteLoading from "vue-infinite-loading";
import moment from "moment";
import { News } from "@/js/api";

export default {
  components: {
    InfiniteLoading,
  },
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
  computed: {
    categoriesMapping: function () {
      let mapping = {};
      for (let category of this.categories) {
        mapping[category.id] = category.name;
      }
      return mapping;
    },
  },
  created() {
    this.$route.meta.title = "";
    this.onSearch = window._.debounce(this.resetInfiniteLoading, 500);
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
        this.resetInfiniteLoading();
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
      }).then((response) => {
        this.lastIndex = response.lastIndex;
        if (this.lastIndex) {
          this.data = this.data.concat(response.list);
          $state.loaded();
        } else {
          $state.complete();
        }
      });
    },
    onSearch() {},
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
        if (category != undefined) {
          const title = `${category.name}公告`;
          document.title = `${title} | 禾場國際芳療學苑`;
          this.$route.meta.title = title;
        }
      }
    },
  },
};
</script>