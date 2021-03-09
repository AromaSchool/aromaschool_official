<template>
  <div>
    <Navbar></Navbar>
    <!--<p>
            <router-link :to="{ name: 'home' }">Home</router-link> |
            <router-link :to="{ name: 'hello' }">Hello World</router-link>
        </p>-->

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
