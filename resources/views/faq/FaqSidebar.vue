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
    <div class="accordion collapse" :class="{ show: fullWidth > 992 }" id="sidebar_collapse">
      <div class="accordion-item" id="accordionExample">
        <div class="accordion-body">
          <ul>
            <li class="sidebar_list" v-for="datum in data" :key="datum.id">
              <router-link :to="`/faq/category/${datum.id}`" :title="datum.name">{{
                datum.name
              }}</router-link>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { QuestionCategory } from "@/js/api";

export default {
  data: () => ({
    data: [],
  }),
  computed: {
    fullWidth: () => window.innerWidth,
  },
  created() {
    this.getCategories();
  },
  methods: {
    getCategories() {
      QuestionCategory.getList().then((response) => {
        this.data = response;
      });
    },
  },
};
</script>