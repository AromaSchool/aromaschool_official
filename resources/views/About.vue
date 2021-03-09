<template>
  <div>
    <Banner></Banner>
    <BreadCrumbs></BreadCrumbs>
    <Menu></Menu>
    <BrandStory></BrandStory>
    <BrandMainService></BrandMainService>
    <BrandOrigin></BrandOrigin>
  </div>
</template>

<script>
import Banner from "@/views/component/Banner.vue";
import BreadCrumbs from "@/views/component/BreadCrumbs.vue";
import Menu from "@/views/component/Menu.vue";
import BrandStory from "@/views/component/BrandStory.vue";
import BrandMainService from "@/views/component/BrandMainService.vue";
import BrandOrigin from "@/views/component/BrandOrigin.vue";

export default {
  components: {
    Banner,
    BreadCrumbs,
    Menu,
    BrandStory,
    BrandMainService,
    BrandOrigin,
  },
};
</script>