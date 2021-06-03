<template>
  <section class="faq">
    <div class="container blog_container">
      <FaqSidebar></FaqSidebar>
      <keep-alive>
        <router-view :key="$route.fullPath"></router-view>
      </keep-alive>
    </div>
  </section>
</template>

<script>
import FaqSidebar from "@/views/faq/FaqSidebar.vue";

export default {
  components: {
    FaqSidebar,
  },
};
</script>