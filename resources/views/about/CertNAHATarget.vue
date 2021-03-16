<template>
  <ContentCenter :title="title" :type="type">
    <b>NAHA的使命</b>
    <p>
      極力推廣並提升大眾對芳香植物與精油應用於醫療上的相關知識, 並使芳香
      療法成為真正專業的藝術與科學。
    </p>
    <b>NAHA的願景</b>
    <p>
      NAHA是芳香療法的領導者，積極地將芳香療法教育推廣給一般大眾、公
      司企業、專業學會與相關業者，來促進和提升整體芳香療法。
    </p>
    <b>NAHA的目標</b>
    <ul>
      <li>促進和推廣芳香療法教育給大眾</li>
      <li>鼓勵高階芳香療法教育的發展，促進與訓練專業的芳香療法從業人員</li>
      <li>促進和提升對芳香植物的認識</li>
      <li>加強國內外芳香療法從業者與企業主之間的交流</li>
      <li>培養與教育在實踐臨床芳香療法中的道德和誠信</li>
      <li>促進臨床/整體芳香療法從業者與醫療專業者之間的合作。</li>
    </ul>
  </ContentCenter>
</template>

<script>
import ContentCenter from "@/views/component/ContentCenter.vue";

export default {
  components: {
    ContentCenter,
  },
  data: () => ({
    title: "NAHA的使命、願景、目標",
    type: "NAHA",
  }),
};
</script>