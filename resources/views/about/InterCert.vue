<template>
  <div class="container blog_container">
    <SidebarCert></SidebarCert>
    <router-view></router-view>
  </div>
</template>

<script>
import SidebarCert from "@/views/about/SidebarCert.vue";

export default {
  components: {
    SidebarCert,
  },
};
</script>