<template>
  <div class="container flex_container">
    <div class="main_side">
      <ContentCenter :title="title" :type="type" :date="date">
        <div v-html="content"></div>
      </ContentCenter>
      <BackBtn></BackBtn>
    </div>
    <SubSide></SubSide>
  </div>
</template>

<script>
import ContentCenter from "@/views/component/ContentCenter.vue";
import BackBtn from "@/views/component/BackBtn.vue";
import SubSide from "@/views/component/SubSide.vue";

export default {
  components: {
    ContentCenter,
    BackBtn,
    SubSide,
  },
  data: () => ({
    title: "",
    content: "",
    date: "",
    type: "",
  }),
};
</script>
