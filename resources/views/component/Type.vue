<template>
  <div class="subside_block type">
    <h2>{{ categoriesTitle }}</h2>
    <template v-if="categories.length != 0">
      <ul class="subside_box">
        <li v-for="category in categories" :key="category.id">
          <router-link
            :to="`/${categoriesPath}/category/${category.id}`"
            :title="category.name"
            >{{ category.name }}</router-link
          >
        </li>
      </ul>
    </template>
    <PuSkeleton :count="5" v-else />
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
    categoriesPath: {
      type: String,
      required: true,
    },
  },
};
</script>