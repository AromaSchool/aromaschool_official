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
      {{ `${title}選單` }}<i class="fas fa-chevron-down"></i>
    </a>
    <div class="accordion collapse" :class="{ show: this.fullWidth > 992 }" id="sidebar_collapse">
      <div
        class="accordion-item"
        id="accordionExample"
        v-for="category in categories"
        :key="category.id"
      >
        <h2 class="accordion-header" :id="`heading${category.id}`">
          <button
            class="accordion-button"
            type="button"
            data-bs-toggle="collapse"
            :data-bs-target="`#collapse${category.id}`"
            aria-expanded="true"
            :aria-controls="`collapse${category.id}`"
          >
            {{ category.name }}
          </button>
        </h2>
        <div
          :id="`collapse${category.id}`"
          class="accordion-collapse collapse show"
          :aria-labelledby="`heading${category.id}`"
          data-bs-parent="#accordionExample"
        >
          <div class="accordion-body">
            <ul>
              <template v-for="name in names">
                <li class="sidebar_list" v-if="category.name == name.category.name" :key="name.id">
                  <router-link :to="`${to}/${name.id}`" :title="name.name">{{
                    name.name
                  }}</router-link>
                </li>
              </template>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  props: {
    categories: {
      type: Array,
      require: true,
    },
    names: {
      type: Array,
      require: true,
    },
    title: {
      type: String,
    },
    to: {
      type: String,
      require: true,
    },
  },
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