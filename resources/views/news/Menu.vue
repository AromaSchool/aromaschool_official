<template>
  <section class="menu">
    <div class="container">
      <ul class="menu_block">
        <li class="menu_box">
          <router-link to="/news/category/all" title="所有公告">所有公告</router-link>
        </li>
        <li class="menu_box" v-for="category in categories" :key="category.id">
          <router-link :to="`/news/category/${category.id}`" :title="category.name">
            {{ category.name }}
          </router-link>
        </li>
      </ul>
    </div>
  </section>
</template>

<script>
export default {
  props: {
    categories: {
      type: Array,
      default: [],
    },
  },
};
</script>