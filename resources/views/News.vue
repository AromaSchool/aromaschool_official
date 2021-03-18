<template>
  <div>
    <Menu></Menu>
    <div class="container search_block">
      <hr />
      <SearchBox></SearchBox>
    </div>
    <NewsList></NewsList>
  </div>
</template>

<script>
import Menu from "@/views/component/Menu.vue";
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