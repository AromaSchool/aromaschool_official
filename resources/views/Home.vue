<template>
  <div>
    <CourseIntro></CourseIntro>
    <News></News>
    <Presentation></Presentation>
    <Certification></Certification>
    <Student></Student>
  </div>
</template>

<script>
import CourseIntro from "@/views/index/CourseIntro.vue";
import News from "@/views/index/News.vue";
import Presentation from "@/views/index/Presentation.vue";
import Certification from "@/views/index/Certification.vue";
import Student from "@/views/index/Student.vue";

export default {
  components: {
    CourseIntro,
    News,
    Presentation,
    Certification,
    Student,
  },
};
</script>