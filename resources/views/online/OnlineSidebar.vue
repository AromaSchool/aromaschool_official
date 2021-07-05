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
      線上教學選單<i class="fas fa-chevron-down"></i>
    </a>
    <div class="accordion collapse" :class="{ show: this.fullWidth > 992 }" id="sidebar_collapse">
      <div class="accordion-item" id="accordionOne">
        <h2 class="accordion-header" id="headingOne">
          <button
            class="accordion-button"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapseOne"
            aria-expanded="true"
            aria-controls="collapseOne"
          >
            NAHA IFPA 芳療認證入門/視訊
          </button>
        </h2>
        <div
          id="collapseOne"
          class="accordion-collapse collapse show"
          aria-labelledby="headingOne"
          data-bs-parent="#accordionOne"
        >
          <div class="accordion-body">
            <ul>
              <li class="sidebar_list">
                <router-link
                  to="/online-course/elementary-video"
                  title="NAHA IFPA 芳療認證入門/視訊 | 課程介紹"
                  >課程介紹</router-link
                >
              </li>
              <li class="sidebar_list">
                <button
                  class="accordion-button"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#collapseSubOne"
                  aria-expanded="true"
                  aria-controls="collapseSubOne"
                >
                  課程分類
                </button>
                <div id="collapseSubOne" class="accordion-collapse collapse show">
                  <div class="accordion-body">
                    <ul class="sidebar_wrapper">
                      <li class="sidebar_list">
                        <router-link
                          to="/online-course/elementary-video/1"
                          title="芳療認證入門班 | 防疫優惠版"
                          >課程名稱 1</router-link
                        >
                      </li>
                      <li class="sidebar_list">
                        <router-link
                          to="/online-course/elementary-video/2"
                          title="芳療認證入門班 | 防疫優惠版"
                          >課程名稱 2</router-link
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </li>
            </ul>
          </div>
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