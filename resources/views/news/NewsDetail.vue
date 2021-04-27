<template>
  <div class="container flex_container">
    <div class="main_side">
      <ContentCenter
        :title="news.title"
        :type="categoriesMapping[news.category]"
        :date="news.createdAt"
      >
        <div v-html="news.content"></div>
      </ContentCenter>
      <BackBtn to="/news/category/all"></BackBtn>
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
import moment from "moment";
import { News } from "@/js/api";

export default {
  components: {
    ContentCenter,
    BackBtn,
    SubSide,
  },
  props: {
    categories: {
      type: Array,
      default: [],
    },
  },
  data: () => ({
    news: new News({ title: "" }),
    rank: [],
    categoriesPath: "news",
    categoriesTitle: "公告分類",
    rankTitle: "最新公告",
    search: "",
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
    this.getNews();
    this.getNewsList();
  },
  methods: {
    getNews() {
      News.get(this.$route.params.id).then((response) => {
        this.news = response;
        this.news.createdAt = moment(this.news.createdAt).format("YYYY/MM/DD");
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
