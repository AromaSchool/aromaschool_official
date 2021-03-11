<template>
  <div class="container">
    <ContentCenter></ContentCenter>
    <BackBtn></BackBtn>
  </div>
</template>

<script>
import ContentCenter from "@/views/component/ContentCenter.vue";
import BackBtn from "@/views/component/BackBtn.vue";

export default {
  components: {
    ContentCenter,
    BackBtn,
  },
};
</script>