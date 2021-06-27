<template>
  <OnlineContent :title="title" :type="type" :isShow="isShow">
    <template #period>
      <ul>
        <li>開始日期：2021年10月10日</li>
        <li>結束日期：2021年11月7日</li>
      </ul>
    </template>
  </OnlineContent>
</template>

<script>
import OnlineContent from "@/views/online/OnlineContent.vue";
import { CourseBatch } from "@/js/api";

export default {
  components: {
    OnlineContent,
  },
  data: () => ({
    title: "課程名稱 1",
    type: "NAHA IFPA 芳療認證入門/視訊",
    // registry: "/course/signup",
    isShow: true,
    onlineMode: "vedio",
    data: [],
  }),
  created() {
    // this.getCourseBatches();
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