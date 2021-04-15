<template>
  <section class="index_news wow animated fadeInUp">
    <div class="index_news_list">
      <div class="news_list_title">
        <h3>學苑周刊<span>BLOG</span></h3>
        <router-link to="/blog/category/all" class="btn_underline white noline" title="更多文章"
          >更多文章</router-link
        >
      </div>
      <ul class="news_block">
        <li v-for="blog in blogs" :key="blog.id">
          <router-link class="news_box" :to="`/blog/${blog.id}`" :title="blog.title">
            <div class="time">
              <span class="month">{{ month(blog.createdAt) }}</span>
              <span class="date">{{ day(blog.createdAt) }}</span>
              <span class="year">{{ year(blog.createdAt) }}</span>
            </div>
            <div class="news_title">
              <div class="category">{{ blog.category.name }}</div>
              <h5>{{ blog.title }}</h5>
            </div>
          </router-link>
        </li>
      </ul>
    </div>
  </section>
</template>

<script>
import moment from "moment";
import { Blog } from "@/js/api";

export default {
  data: () => ({
    blogs: [],
  }),
  created() {
    this.getBlogs();
  },
  methods: {
    getBlogs() {
      Blog.getList({
        limit: 5,
      }).then((response) => {
        this.lastIndex = response.lastIndex;
        this.blogs.push(...response.list);
      });
    },
    year(date) {
      return moment(date).format("YYYY");
    },
    month(date) {
      return moment(date).format("MM");
    },
    day(date) {
      return moment(date).format("DD");
    },
  },
};
</script>