<template>
  <div>
    <Navbar></Navbar>
    <router-view></router-view>
    <Footer></Footer>
  </div>
</template>
<script>
import Navbar from "../views/component/Navbar.vue";
import Footer from "../views/component/Footer.vue";

export default {
  components: {
    Navbar,
    Footer,
  },
};
</script>
