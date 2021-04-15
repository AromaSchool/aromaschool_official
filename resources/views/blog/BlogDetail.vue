<template>
  <div class="container flex_container">
    <div class="main_side">
      <ContentCenter
        :title="blog.title"
        :type="blog.category.name"
        :date="datetimeFormat(blog.createdAt)"
        :keywords="blog.keywords"
        :author="{
          name: blog.authorName,
          bio: blog.authorBio,
          image: blog.authorImage,
        }"
      >
        <div v-html="blog.content"></div>
      </ContentCenter>
      <BackBtn to="/blog/category/all"></BackBtn>
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
import { Blog } from "@/js/api";

export default {
  components: {
    ContentCenter,
    BackBtn,
    SubSide,
  },
  props: {
    categories: {
      type: Array,
      default: () => [],
    },
  },
  data: () => ({
    blog: new Blog({ title: "", category: {}, createdAt: "", content: "" }),
    categoriesTitle: "文章分類",
    categoriesPath: "blog",
    rank: [],
    rankTitle: "熱門文章",
    search: null,
  }),
  created() {
    Promise.all([this.getBlog(), this.getBlogs()]);
  },
  methods: {
    getBlog() {
      Blog.get(this.$route.params.id).then((response) => {
        this.blog = response;
        this.blog.hit();
      });
    },
    getBlogs() {
      Blog.getList({
        limit: 5,
        orderBy: "hits",
      }).then((response) => {
        for (const blog of response.list) {
          this.rank.push({
            id: blog.id,
            title: blog.title,
            to: `/blog/${blog.id}`,
          });
        }
      });
    },
    datetimeFormat(datetime) {
      return moment(datetime).format("YYYY-MM-DD");
    },
    onSearch() {
      this.$router.push({
        name: "blogAll",
        query: {
          search: this.search,
        },
      });
    },
  },
};
</script>
