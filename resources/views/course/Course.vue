<template>
  <section class="course">
    <div class="container blog_container">
      <CourseSidebar v-if="$route.name != 'course-sign-up'"></CourseSidebar>
      <router-view></router-view>
    </div>
  </section>
</template>

<script>
import CourseSidebar from "@/views/course/CourseSidebar.vue";

export default {
  components: {
    CourseSidebar,
  },
};
</script>
