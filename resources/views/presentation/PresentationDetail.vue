<template>
  <div class="main_side">
    <PresentationContent :presentation="data"></PresentationContent>
    <BackBtn :to="to"></BackBtn>
  </div>
</template>

<script>
import PresentationContent from "@/views/presentation/PresentationContent.vue";
import BackBtn from "@/views/component/BackBtn.vue";
import { Presentation } from "@/js/api";

export default {
  inject: ["setTitle"],
  components: {
    PresentationContent,
    BackBtn,
  },
  data: () => ({
    from: null,
    data: new Presentation(),
    title: "歐沐慈",
    type: "高階71期學員",
    date: "2020-11-20",
    summary:
      "沐慈的個案發表主題為「肌膚保養」相關。個案膚況為T字出油、兩頰偏乾，臉部膚色偏暗沉，兩頰較乾部位呈現細紋，且有大片斑點，芳療調整主要改善膚況。肌膚療程大概為時兩個月，個案明顯臉部除了提亮之外，整體看起來是柔和的，最初臉上的斑看起來非常明顯，現在看起來感覺顏色比較沉下去，不會這麼跳出的感覺，觸摸也較為滑嫩。",
  }),
  beforeRouteEnter(to, from, next) {
    next((vm) => {
      vm.from = from;
    });
  },
  computed: {
    to: function () {
      return this.from && this.from.name == "presentationAll" ? null : "/presentation/category/all";
    },
  },
  created() {
    this.$route.meta.title = "";
    this.getPresentation();
  },
  methods: {
    getPresentation() {
      Presentation.get(this.$route.params.id)
        .then((response) => {
          this.data = response;
          this.$route.meta.title = this.data.title || this.data.name;
          this.setTitle(this.data.title || this.data.name);
        })
        .catch(() => {
          this.$router.push({ path: "/404" });
        });
    },
  },
};
</script>