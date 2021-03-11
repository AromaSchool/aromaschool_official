<template>
  <div>
    <header v-if="$route.name == 'home'">
      <div class="container">
        <figure>
          <img src="@/image/index/logo_big.svg" alt="logo" />
        </figure>
        <div class="welcome_words">
          <span>WELCOME</span>
          <h1>歡迎來到禾場國際芳療學苑</h1>
          <h2>
            我們把對大自然的執著與熱情，灌溉在芳香療法的禾場，來到這裡，您就是我們看顧的一粒種籽...
          </h2>
        </div>
        <a href="/about/brand" class="btn_outline white" title="關於禾場"
          >了解我們的故事</a
        >
      </div>
    </header>
    <section
      class="header_banner"
      v-else
      v-bind:style="{
        'background-image': 'url(/' + bannerImage + ')',
      }"
    >
      <div class="container">
        <h1>
          {{ $route.matched[0].meta.title
          }}<span>{{ $route.matched[0].meta.titleEn }}</span>
        </h1>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  computed: {
    bannerImage() {
      return this.$route.meta.bannerImage
        ? this.$route.meta.bannerImage
        : this.$route.matched[0].meta.bannerImage;
    },
  },
};
</script>
