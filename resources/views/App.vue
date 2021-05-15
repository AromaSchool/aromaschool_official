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
  provide() {
    return {
      setTitle: this.setTitle,
      setAuthor: this.setAuthor,
      setDescription: this.setDescription,
    };
  },
  data: () => ({
    title: process.env.MIX_META_TAG_TITLE,
    author: process.env.MIX_META_TAG_AUTHOR,
    description: process.env.MIX_META_TAG_DESCRIPTION,
  }),
  watch: {
    $route: {
      immediate: true,
      handler(to, from) {
        // set default meta data
        this.author = process.env.MIX_META_TAG_AUTHOR;
        this.description = process.env.MIX_META_TAG_DESCRIPTION;

        // reverse array without mutation original array by using slice()
        for (let matched of this.$route.matched.slice().reverse()) {
          if (matched.meta.title) {
            this.title = matched.meta.title;
            return;
          }
        }
        this.title = process.env.MIX_META_TAG_TITLE;
      },
    },
  },
  metaInfo() {
    return {
      title: this.title,
      titleTemplate: `%s | ${this.author}`,
      meta: [
        {
          property: "og:title",
          content: this.title,
          template: (chunk) => `${chunk} | ${this.author}`,
          vmid: "og:title",
        },
        {
          property: "og:site_name",
          content: this.title,
          template: (chunk) => `${chunk} | ${this.author}`,
          vmid: "og:site_name",
        },
        {
          itemprop: "name",
          content: this.title,
          template: (chunk) => `${chunk} | ${this.author}`,
          vmid: "itemprop:name",
        },
        {
          property: "og:description",
          content: this.description,
          vmid: "og:description",
        },
        {
          itemprop: "description",
          content: this.description,
          vmid: "itemprop:description",
        },
        {
          name: "description",
          content: this.description,
          vmid: "name:description",
        },
      ],
    };
  },
  created() {
    this.$recaptchaLoaded().then(() => {
      // Hide reCAPTCHA badge:
      this.$recaptchaInstance.hideBadge();
    });
  },
  methods: {
    setTitle(title) {
      this.title = title;
    },
    setAuthor(author) {
      this.author = author;
    },
    setDescription(description) {
      this.description = description.replace(/(\r\n|\n|\r| )/gm, "").substring(0, 160);
    },
  },
};
</script>

<style>
html {
  scroll-behavior: auto !important;
}
</style>