<template>
  <section class="sidebar">
    <a
      class="btn_sidebar collapsed"
      data-bs-toggle="collapse"
      href="#sidebar_collapse"
      role="button"
      aria-expanded="false"
      aria-controls="sidebar_collapse"
    >
      常見問題選單<i class="fas fa-chevron-down"></i>
    </a>
    <div class="accordion collapse" :class="{ show: this.fullWidth > 992 }" id="sidebar_collapse">
      <div class="accordion-item" id="accordionExample">
        <div class="accordion-body">
          <ul>
            <li class="sidebar_list">
              <router-link to="/faq/category/1" title="課程相關">課程相關</router-link>
            </li>
            <li class="sidebar_list">
              <router-link to="/faq/category/2" title="認證申請">認證申請</router-link>
            </li>
            <li class="sidebar_list">
              <router-link to="/faq/category/3" title="學苑相關">學苑相關</router-link>
            </li>
            <li class="sidebar_list">
              <router-link to="/faq/category/4" title="產品相關">產品相關</router-link>
            </li>
            <li class="sidebar_list">
              <router-link to="/faq/category/5" title="其他">其他</router-link>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  data() {
    return {
      fullWidth: 0,
      fullHeight: 0,
    };
  },
  created() {
    window.addEventListener("resize", this.windowResize);
    this.windowResize();
  },
  destroyed() {
    window.removeEventListener("resize", this.windowResize);
  },
  methods: {
    windowResize(e) {
      this.fullWidth = window.innerWidth;
      this.fullHeight = window.innerHeight;
    },
  },
};
</script>