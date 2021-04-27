<template>
  <CourseContent :title="title" :type="type"> </CourseContent>
</template>

<script>
import CourseContent from "@/views/course/CourseContent.vue";

export default {
  components: {
    CourseContent,
  },
  data: () => ({
    title: "芳香療法認證課程入門班",
    type: "芳療學苑",
  }),
};
</script>