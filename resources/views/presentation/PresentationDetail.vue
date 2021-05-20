<template>
  <PresentationContent :title="title" :type="type"></PresentationContent>
</template>

<script>
import PresentationContent from "@/views/presentation/PresentationContent.vue";

export default {
  components: {
    PresentationContent,
  },
  data: () => ({
    title: "歐沐慈",
    type: "高階71期學員",
  }),
};
</script>