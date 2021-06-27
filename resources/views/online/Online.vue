<template>
  <section class="online">
    <div class="container online_container">
      <OnlineSidebar
        v-if="$route.name != 'course-sign-up' && $route.name != 'course-finish'"
      ></OnlineSidebar>
      <router-view></router-view>
    </div>
  </section>
</template>

<script>
import OnlineSidebar from "@/views/online/OnlineSidebar.vue";

export default {
  components: {
    OnlineSidebar,
  },
};
</script>
