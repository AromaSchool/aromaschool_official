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
      {{ `${$route.matched[1].meta.title}選單` }}<i class="fas fa-chevron-down"></i>
    </a>
    <div class="accordion collapse" :class="{ show: this.fullWidth > 992 }" id="sidebar_collapse">
      <div class="accordion-item" id="accordionExample">
        <h2 class="accordion-header" id="headingOne">
          <button
            class="accordion-button"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapseOne"
            aria-expanded="true"
            aria-controls="collapseOne"
          >
            NAHA
          </button>
        </h2>
        <div
          id="collapseOne"
          class="accordion-collapse collapse show"
          aria-labelledby="headingOne"
          data-bs-parent="#accordionExample"
        >
          <div class="accordion-body">
            <ul>
              <li class="sidebar_list">
                <router-link to="/about/interCert/NAHA/about" title="關於NAHA"
                  >關於NAHA</router-link
                >
              </li>
              <li class="sidebar_list">
                <router-link to="/about/interCert/NAHA/target" title="NAHA的使命、願景、目標"
                  >NAHA的使命、願景、目標</router-link
                >
              </li>
              <li class="sidebar_list">
                <router-link to="/about/interCert/NAHA/history" title="NAHA的歷史"
                  >NAHA的歷史</router-link
                >
              </li>
              <li class="sidebar_list">
                <router-link to="/about/interCert/NAHA/moral" title="NAHA的道德規範標準"
                  >NAHA的道德規範標準</router-link
                >
              </li>
              <li class="sidebar_list">
                <router-link to="/about/interCert/NAHA/training" title="美國國家芳療師訓練標準"
                  >美國國家芳療師訓練標準</router-link
                >
              </li>
              <li class="sidebar_list">
                <router-link
                  to="/about/interCert/NAHA/howToBecome"
                  title="如何成為NAHA美國國家芳療師協會認可的芳療學校"
                >
                  如何成為NAHA美國國家芳療師協會認可的芳療學校
                </router-link>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapseTwo"
            aria-expanded="false"
            aria-controls="collapseTwo"
          >
            IFPA
          </button>
        </h2>
        <div
          id="collapseTwo"
          class="accordion-collapse collapse"
          aria-labelledby="headingTwo"
          data-bs-parent="#accordionExample"
        >
          <div class="accordion-body">
            <ul>
              <li class="sidebar_list">
                <router-link to="/about/interCert/IFPA/about" title="關於IFPA"
                  >關於IFPA</router-link
                >
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