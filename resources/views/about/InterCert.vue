<template>
  <div class="container blog_container">
    <Sidebar></Sidebar>
    <ContentCenter></ContentCenter>
  </div>
</template>

<script>
import Sidebar from "@/views/component/Sidebar.vue";
import ContentCenter from "@/views/component/ContentCenter.vue";

export default {
  components: {
    Sidebar,
    ContentCenter,
  },
};
</script>