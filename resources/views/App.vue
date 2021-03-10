<template>
  <div>
    <Navbar></Navbar>
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
};
</script>
