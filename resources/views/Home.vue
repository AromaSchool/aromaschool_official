<template>
  <div>
    <Header></Header>
    <CourseIntro></CourseIntro>
    <News></News>
    <Presentation></Presentation>
    <Certification></Certification>
    <Student></Student>
  </div>
</template>

<script>
import Header from "@/views/index/Header.vue";
import CourseIntro from "@/views/index/CourseIntro.vue";
import News from "@/views/index/News.vue";
import Presentation from "@/views/index/Presentation.vue";
import Certification from "@/views/index/Certification.vue";
import Student from "@/views/index/Student.vue";

export default {
  components: {
    Header,
    CourseIntro,
    News,
    Presentation,
    Certification,
    Student,
  },
};
</script>