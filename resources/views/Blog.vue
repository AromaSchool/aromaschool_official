<template>
  <div>
    <template v-if="$route.name != 'blogDetail'"
      ><Menu></Menu>
      <div class="container search_block">
        <hr />
        <SearchBox v-model="search"></SearchBox>
      </div>
    </template>
    <router-view></router-view>
  </div>
</template>

<script>
import Menu from "@/views/blog/Menu.vue";
import SearchBox from "@/views/component/SearchBox.vue";

export default {
  components: {
    Menu,
    SearchBox,
  },
};
</script>