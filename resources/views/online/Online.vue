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
import { CoursesOnline } from "@/js/api";

export default {
  components: {
    OnlineSidebar,
  },
  created() {
    this.getCoursesOnline();
  },
  methods: {
    getCoursesOnline() {
      CoursesOnline.getList()
        .then((response) => {
          console.log(response);
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>
