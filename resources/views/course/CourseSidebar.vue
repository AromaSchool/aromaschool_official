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
      {{ $route.matched[1].meta.title }}選單<i class="fas fa-chevron-down"></i>
    </a>
    <div
      class="accordion collapse"
      :class="{ show: this.fullWidth > 992 }"
      id="sidebar_collapse"
    >
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
            芳療學苑
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
                  to="/course/aromatherapy/elementary"
                  title="芳香療法認證課程入門班"
                  >芳香療法認證課程入門班</router-link
                >
              </li>
              <li class="sidebar_list">
                <router-link
                  to="/course/aromatherapy/intermediate"
                  title="芳香療法認證課程中階班"
                  >芳香療法認證課程中階班</router-link
                >
              </li>
              <li class="sidebar_list">
                <router-link
                  to="/course/aromatherapy/advanced"
                  title="芳香療法認證課程高階班"
                  >芳香療法認證課程高階班</router-link
                >
              </li>
              <li class="sidebar_list">
                <router-link
                  to="/course/aromatherapy/clinical"
                  title="臨床芳療師認證課程"
                  >臨床芳療師認證課程</router-link
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="accordion-item" id="accordionTwo">
        <h2 class="accordion-header" id="headingTwo">
          <button
            class="accordion-button"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapseTwo"
            aria-expanded="true"
            aria-controls="collapseTwo"
          >
            療程學苑
          </button>
        </h2>
        <div
          id="collapseTwo"
          class="accordion-collapse collapse show"
          aria-labelledby="headingTwo"
          data-bs-parent="#accordionTwo"
        >
          <div class="accordion-body">
            <ul>
              <li class="sidebar_list">
                <router-link
                  to="/course/treatment/british"
                  title="英式芳療按摩療程"
                  >英式芳療按摩療程</router-link
                >
              </li>
              <li class="sidebar_list">
                <router-link
                  to="/course/treatment/lymphatic"
                  title="淋巴引流按摩療程"
                  >淋巴引流按摩療程</router-link
                >
              </li>
              <li class="sidebar_list">
                <router-link
                  to="/course/treatment/facial"
                  title="顱顏深層按摩療程"
                  >顱顏深層按摩療程</router-link
                >
              </li>
              <li class="sidebar_list">
                <router-link
                  to="/course/treatment/pregnancy"
                  title="孕產婦芳療療程"
                  >孕產婦芳療療程</router-link
                >
              </li>
              <li class="sidebar_list">
                <router-link
                  to="/course/treatment/myofascial"
                  title="肌筋膜系列課程"
                  >肌筋膜系列課程</router-link
                >
              </li>
              <li class="sidebar_list">
                <router-link
                  to="/course/treatment/swedish"
                  title="瑞典式按摩療程"
                  >瑞典式按摩療程</router-link
                >
              </li>
              <li class="sidebar_list">
                <router-link
                  to="/course/treatment/meridian"
                  title="經絡按摩療程"
                  >經絡按摩療程</router-link
                >
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="accordion-item" id="accordionThree">
        <h2 class="accordion-header" id="headingThree">
          <button
            class="accordion-button"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapseThree"
            aria-expanded="true"
            aria-controls="collapseThree"
          >
            網路學苑
          </button>
        </h2>
        <div
          id="collapseThree"
          class="accordion-collapse collapse show"
          aria-labelledby="headingThree"
          data-bs-parent="#accordionThree"
        >
          <div class="accordion-body">
            <ul>
              <li class="sidebar_list">
                <router-link
                  to="/course/online/elementary"
                  title="直播芳療認證課程入門班"
                  >直播芳療認證課程入門班</router-link
                >
              </li>
              <li class="sidebar_list">
                <router-link
                  to="/course/online/intermediate"
                  title="直播芳療認證課程中階班"
                  >直播芳療認證課程中階班</router-link
                >
              </li>
              <li class="sidebar_list">
                <router-link
                  to="/course/online/all"
                  title="線上芳療認證課程全階班"
                  >線上芳療認證課程全階班</router-link
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