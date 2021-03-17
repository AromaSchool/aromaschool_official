<template>
  <div class="container blog_container">
    <Sidebar></Sidebar>
    <router-view></router-view>
  </div>
</template>

<script>
import Sidebar from "@/views/component/Sidebar.vue";

export default {
  components: {
    Sidebar,
  },
};
</script>