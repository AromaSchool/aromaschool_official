<template>
  <div class="subside_block type">
    <h2>{{ categoriesTitle }}</h2>
    <ul class="subside_box">
      <li v-for="category in categories" :key="category.id">
        <router-link
          :to="`/news/category/${category.id}`"
          :title="`${category.name}公告`"
          >{{ `${category.name}公告` }}</router-link
        >
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: {
    categories: {
      type: Array,
      default: [],
    },
    categoriesTitle: {
      type: String,
      required: true,
    },
  },
};
</script>