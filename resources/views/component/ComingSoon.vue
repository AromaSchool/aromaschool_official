<template>
  <section class="coming_soon">
    <div class="container">
      <figure>
        <img src="@/image/coming_soon.svg" alt="Coming Soon" />
      </figure>
      <h2 class="title">Coming Soon</h2>
      <p class="remark">更多內容即將上線</p>
      <router-link to="/contact" class="btn_underline brown" title="聯絡我們"
        >聯絡我們</router-link
      >
    </div>
  </section>
</template>

<script>
import BackBtn from "@/views/component/BackBtn.vue";

export default {
  components: {
    BackBtn,
  },
};
</script>