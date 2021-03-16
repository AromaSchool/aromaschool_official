<template>
  <div>
    <Menu></Menu>
    <keep-alive>
      <router-view></router-view>
    </keep-alive>
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