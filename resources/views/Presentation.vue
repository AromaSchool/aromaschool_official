<template>
  <section class="presentation">
    <div class="container blog_container">
      <Sidebar
        :categories="category"
        :names="item"
        :title="title"
        to="/presentation/category"
      ></Sidebar>
      <keep-alive include="PresentationList">
        <router-view :key="$route.fullPath"></router-view>
      </keep-alive>
    </div>
  </section>
</template>

<script>
import Sidebar from "@/views/component/Sidebar.vue";
import { Symptom, PhysiologicalSystems } from "@/js/api";

export default {
  components: {
    Sidebar,
  },
  data: () => ({
    title: "香氣發表會",
    item: [],
    category: [],
  }),
  created() {
    this.getPhysiologicalSystems();
    this.getSymptoms();
  },
  methods: {
    getPhysiologicalSystems() {
      PhysiologicalSystems.getList().then((response) => {
        this.category = response;
      });
    },
    getSymptoms() {
      Symptom.getList().then((response) => {
        this.item = response;
      });
    },
  },
};
</script>