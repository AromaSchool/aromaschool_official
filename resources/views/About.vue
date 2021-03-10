<template>
  <div>
    <Menu></Menu>
    <BrandStory></BrandStory>
    <BrandMainService></BrandMainService>
    <BrandOrigin></BrandOrigin>
  </div>
</template>

<script>
import Menu from "@/views/component/Menu.vue";
import BrandStory from "@/views/about/BrandStory.vue";
import BrandMainService from "@/views/about/BrandMainService.vue";
import BrandOrigin from "@/views/about/BrandOrigin.vue";

export default {
  components: {
    Menu,
    BrandStory,
    BrandMainService,
    BrandOrigin,
  },
};
</script>