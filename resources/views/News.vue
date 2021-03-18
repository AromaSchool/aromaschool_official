<template>
  <div>
    <Menu></Menu>
    <div class="container search_block">
      <hr />
      <SearchBox></SearchBox>
    </div>
    <router-view></router-view>
  </div>
</template>

<script>
import Menu from "@/views/news/Menu.vue";
import SearchBox from "@/views/component/SearchBox.vue";
import NewsList from "@/views/news/NewsList.vue";

export default {
  components: {
    Menu,
    NewsList,
    SearchBox,
  },
};
</script>