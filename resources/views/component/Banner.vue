<template>
  <section
    class="header_banner"
    v-bind:style="{ 'background-image': 'url(' + image + ')' }"
  >
    <div class="container">
      <h1>關於禾場<span>ABOUT</span></h1>
    </div>
  </section>
</template>

<script>
export default {
  data: () => ({
    image: "images/banner-1.jpg",
  }),
};
</script>
