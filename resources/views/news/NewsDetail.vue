<template>
  <div class="container flex_container">
    <div class="main_side">
      <ContentCenter
        :title="news.title"
        :type="`${categoriesMapping[news.category]}公告`"
        :date="news.created_at"
      >
        <div v-html="news.content"></div>
      </ContentCenter>
      <BackBtn></BackBtn>
    </div>
    <SubSide v-model="search"></SubSide>
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
  },
  methods: {
    getNews() {
      News.get(this.$route.params.id).then((response) => {
        this.news = response;
        this.news.created_at = moment(this.news.created_at).format(
          "YYYY/MM/DD"
        );
      });
    },
  },
};
</script>
