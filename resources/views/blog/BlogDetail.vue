<template>
  <div class="container flex_container">
    <div class="main_side">
      <ContentCenter
        :title="blog.title"
        :type="blog.category.name"
        :date="blog.createdAt"
        :keywords="blog.keywords"
        :author="{
          name: blog.authorName,
          bio: blog.authorBio,
          image: blog.authorImage,
        }"
      >
        <div v-html="blog.content"></div>
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
  computed: {
    to: function () {
      return this.from && (this.from.name == "blogAll" || this.from.name == "blogCategory")
        ? null
        : "/blog/category/all";
    },
  },
  data: () => ({
    blog: new Blog(),
    categoriesTitle: "文章分類",
    categoriesPath: "blog",
    rank: [],
    rankTitle: "熱門文章",
    search: null,
    from: null,
  }),
  beforeRouteEnter(to, from, next) {
    next((vm) => {
      vm.from = from;
    });
  },
  created() {
    this.getBlog();
    this.getBlogs();
  },
  methods: {
    getBlog() {
      Blog.get(this.$route.params.id).then((response) => {
        this.blog = response;
        this.blog.hit();
        this.$route.meta.title = this.blog.title;
        document.title = `${this.blog.title} | 禾場國際芳療學苑`;
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
