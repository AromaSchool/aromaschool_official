<template>
  <div>
    <Navbar></Navbar>
    <Banner></Banner>
    <BreadCrumbs></BreadCrumbs>
    <router-view></router-view>
    <Footer></Footer>
  </div>
</template>

<script>
import Navbar from "@/views/component/Navbar.vue";
import Banner from "@/views/component/Banner.vue";
import BreadCrumbs from "@/views/component/BreadCrumbs.vue";
import Footer from "@/views/component/Footer.vue";

export default {
  components: {
    Navbar,
    Banner,
    BreadCrumbs,
    Footer,
  },
  watch: {
    $route: {
      immediate: true,
      handler(to, from) {
        document.title = to.meta.title + " | 禾場國際芳療學苑";
      },
    },
  },
};
</script>
