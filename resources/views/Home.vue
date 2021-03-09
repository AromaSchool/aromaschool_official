<template>
  <div>
    <IndexHeader></IndexHeader>
    <IndexCourseIntro></IndexCourseIntro>
    <IndexNews></IndexNews>
    <IndexPresentation></IndexPresentation>
    <IndexCertification></IndexCertification>
    <IndexStudent></IndexStudent>
  </div>
</template>

<script>
import IndexHeader from "../views/component/IndexHeader.vue";
import IndexCourseIntro from "../views/component/IndexCourseIntro.vue";
import IndexNews from "../views/component/IndexNews.vue";
import IndexPresentation from "../views/component/IndexPresentation.vue";
import IndexCertification from "../views/component/IndexCertification.vue";
import IndexStudent from "../views/component/IndexStudent.vue";

import { WOW } from "wowjs";

export default {
  created() {
    new WOW().init();
  },
  components: {
    IndexHeader,
    IndexCourseIntro,
    IndexNews,
    IndexPresentation,
    IndexCertification,
    IndexStudent,
  },
};
</script>
