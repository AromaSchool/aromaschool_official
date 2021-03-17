<template>
  <ContentCenter :title="title" :type="type">
    <figure>
      <img src="@/image/index/IFPA_logo.png" alt="IFPA" />
    </figure>
    <p>
      英國最大規模的專業芳療協會兼慈善機構，他們致力推廣健康芳療的原則和理念，促進社會福祉。
      IFPA由英國RQA、
      ISPA及IFA的專業芳療師組成，擁有嚴謹的課程研習及認證考試標準，培訓學員成為合格的IFPA臨床芳療師。
    </p>
  </ContentCenter>
</template>

<script>
import ContentCenter from "@/views/component/ContentCenter.vue";

export default {
  components: {
    ContentCenter,
  },
  data: () => ({
    title: "關於IFPA",
    type: "IFPA",
  }),
};
</script>