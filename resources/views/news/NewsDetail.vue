<template>
  <div class="container flex_container">
    <div class="main_side">
      <ContentCenter :title="news.title" :date="news.createdAt">
        <div v-html="news.content"></div>
      </ContentCenter>
      <BackBtn :to="to"></BackBtn>
    </div>
    <SubSide
      v-model="search"
      :categories="categories"
      :categoriesPath="categoriesPath"
      :categoriesTitle="categoriesTitle"
      :rank="rank"
      :rankTitle="rankTitle"
      @search="onSearch"
    ></SubSide>
  </div>
</template>

<script>
import ContentCenter from "@/views/component/ContentCenter.vue";
import BackBtn from "@/views/component/BackBtn.vue";
import SubSide from "@/views/component/SubSide.vue";
import { News } from "@/js/api";

export default {
  components: {
    ContentCenter,
    BackBtn,
    SubSide,
  },
  inject: ["setTitle"],
  props: {
    categories: {
      type: Array,
      default: [],
    },
  },
  data: () => ({
    news: new News(),
    rank: [],
    categoriesPath: "news",
    categoriesTitle: "公告分類",
    rankTitle: "最新公告",
    search: "",
    from: null,
  }),
  computed: {
    to: function () {
      return this.from && (this.from.name == "newsAll" || this.from.name == "newsCategory")
        ? null
        : "/news/category/all";
    },
  },
  beforeRouteEnter(to, from, next) {
    next((vm) => {
      vm.from = from;
    });
  },
  created() {
    this.getNews();
    this.getNewsList();
  },
  methods: {
    getNews() {
      News.get(this.$route.params.id).then((response) => {
        if (!response) {
          this.$router.push({ name: "newsCategory404" });
        }
        this.news = response;
        this.$route.meta.title = this.news.title;
        this.setTitle(this.news.title);
      });
    },
    getNewsList() {
      News.getList({
        limit: 5,
      }).then((response) => {
        for (const news of response.list) {
          this.rank.push({
            id: news.id,
            title: news.title,
            to: `/news/${news.id}`,
          });
        }
      });
    },
    onSearch() {
      this.$router.push({
        name: "newsAll",
        query: {
          search: this.search,
        },
      });
    },
  },
};
</script>
