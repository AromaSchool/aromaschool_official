<template>
  <div>
    <template v-if="$route.name != 'blogDetail'">
      <Menu :categories="categories"></Menu>
      <div class="container search_block">
        <hr />
        <SearchBox v-model="search"></SearchBox>
      </div>
    </template>
    <keep-alive include="BlogList">
      <router-view
        :search.sync="search"
        :categories="categories"
        :key="$route.fullPath"
      ></router-view>
    </keep-alive>
  </div>
</template>

<script>
import { BlogCategory } from "@/js/api";
import Menu from "@/views/blog/Menu.vue";
import SearchBox from "@/views/component/SearchBox.vue";

export default {
  components: {
    Menu,
    SearchBox,
  },
  data: () => ({
    search: null,
    categories: [],
  }),
  created() {
    this.getBlogCategories();
  },
  methods: {
    getBlogCategories() {
      BlogCategory.getList().then((response) => {
        this.categories = response;
      });
    },
  },
};
</script>