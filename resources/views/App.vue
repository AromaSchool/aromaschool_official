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
        let title = null;
        // reverse array without mutation original array by using slice()
        for (let matched of this.$route.matched.slice().reverse()) {
          if (matched.meta.title) {
            title = matched.meta.title;
            break;
          }
        }
        document.title = `${title} | 禾場國際芳療學苑`;
      },
    },
  },
  created() {
    this.$recaptchaLoaded().then(() => {
      const recaptcha = this.$recaptchaInstance;

      // Hide reCAPTCHA badge:
      recaptcha.hideBadge();
    });
  },
};
</script>

<style>
html {
  scroll-behavior: auto !important;
}
</style>