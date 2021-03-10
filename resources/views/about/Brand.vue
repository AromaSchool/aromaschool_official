<template>
  <div>
    <BrandStory></BrandStory>
    <BrandMainService></BrandMainService>
    <BrandOrigin></BrandOrigin>
  </div>
</template>

<script>
import BrandStory from "@/views/about/BrandStory.vue";
import BrandMainService from "@/views/about/BrandMainService.vue";
import BrandOrigin from "@/views/about/BrandOrigin.vue";

export default {
  components: {
    BrandStory,
    BrandMainService,
    BrandOrigin,
  },
};
</script>