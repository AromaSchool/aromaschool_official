<template>
  <OnlineContent :title="title" :type="type" :isShow="isShow"> </OnlineContent>
</template>

<script>
import OnlineContent from "@/views/online/OnlineContent.vue";
import { CourseBatch } from "@/js/api";

export default {
  components: {
    CourseContent,
  },
  data: () => ({
    title: "直播芳療認證課程中階班",
    type: "網路學苑",
    registry: "/course/signup",
    isShowSchedule: true,
    isShowProcess: true,
    isShowFeature: true,
    isShowSuitable: true,
    isShowTarget: true,
    isShowPayment: true,
    isShowOnline: true,
    isShowPrecaution: true,
    isShowMeasure: true,
    onlineMode: "vedio",
    data: [],
  }),
  created() {
    this.getCourseBatches();
  },
  methods: {
    getCourseBatches() {
      CourseBatch.getList({
        courseId: this.$route.meta.courseId,
      }).then((response) => {
        if (response) {
          this.data.push(...response);
        }
      });
    },
  },
};
</script>