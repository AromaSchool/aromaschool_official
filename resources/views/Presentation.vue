<template>
  <section class="presentation">
    <div class="container blog_container">
      <Sidebar :categories="category" :names="item"></Sidebar>
      <router-view></router-view>
    </div>
  </section>
</template>

<script>
import Sidebar from "@/views/component/Sidebar.vue";

export default {
  components: {
    Sidebar,
  },
  data: () => ({
    item: [
      { category: { id: 1, name: "淋巴免疫系統" }, id: 1, name: "皮膚乾燥" },
      { category: { id: 1, name: "淋巴免疫系統" }, id: 2, name: "斑點細紋" },
      { category: { id: 2, name: "循環系統" }, id: 3, name: "紋路明顯" },
    ],
    category: [
      { id: 1, name: "淋巴免疫系統" },
      { id: 2, name: "循環系統" },
      { id: 3, name: "消化系統" },
      { id: 4, name: "內分泌系統" },
      { id: 5, name: "骨骼肌肉系統" },
      { id: 6, name: "皮膚系統" },
      { id: 7, name: "生殖系統" },
      { id: 8, name: "神經系統" },
      { id: 9, name: "泌尿系統" },
      { id: 10, name: "呼吸系統" },
    ],
  }),
  mounted() {
    console.log(this.$route.matched[1]);
    console.log("");
  },
};
</script>