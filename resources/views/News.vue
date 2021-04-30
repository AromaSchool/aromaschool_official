<template>
  <div>
    <template v-if="$route.name != 'newsDetail'">
      <Menu :categories="categories"></Menu>
      <div class="container search_block">
        <hr />
        <SearchBox v-model="search"></SearchBox>
      </div>
    </template>
    <keep-alive include="NewsList">
      <router-view
        :search.sync="search"
        :categories="categories"
        :key="$route.fullPath"
      ></router-view>
    </keep-alive>
  </div>
</template>

<script>
import Menu from "@/views/news/Menu.vue";
import SearchBox from "@/views/component/SearchBox.vue";
import NewsList from "@/views/news/NewsList.vue";
import { NewsCategory } from "@/js/api";

export default {
  components: {
    Menu,
    NewsList,
    SearchBox,
  },
  data: () => ({
    search: "",
    categories: [],
  }),
  created() {
    this.getNewsCategories();
  },
  methods: {
    getNewsCategories() {
      NewsCategory.getList().then((response) => {
        this.categories = response.map((category) => {
          category.name = `${category.name}公告`;
          return category;
        });
      });
    },
  },
};
</script>