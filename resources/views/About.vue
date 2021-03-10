<template>
  <div>
    <Menu></Menu>
    <router-view></router-view>
  </div>
</template>

<script>
import Menu from "@/views/component/Menu.vue";

export default {
  components: {
    Menu,
  },
};
</script>