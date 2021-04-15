<template>
  <div class="container blog_container">
    <Sidebar :categories="category" :names="item"></Sidebar>
    <ContentCenter
      :key="$route.path"
      :title="findItem.name"
      :type="findItem.title"
      :firstImage="findItem.image"
    >
      <div v-html="findItem.experience"></div>
    </ContentCenter>
  </div>
</template>

<script>
import { TeamMember } from "@/js/api";
import Sidebar from "@/views/component/Sidebar.vue";
import ContentCenter from "@/views/component/ContentCenter.vue";

export default {
  components: {
    Sidebar,
    ContentCenter,
  },
  data: () => ({
    item: [],
    category: [],
  }),
  created() {
    this.getTeamMember();
    this.getTeamMemberCategory();
    console.log(this.data);
  },
  computed: {
    findItem: function () {
      for (let item of this.item) {
        if (this.$route.params.id == item.id) {
          return item;
        } else if (this.$route.params.id == undefined) {
          return this.item[0];
        }
      }
      if (this.item.length) {
        this.$router.push({ path: "/about/teamMember/404" });
      }
      return {};
    },
  },
  methods: {
    getTeamMember() {
      TeamMember.get().then((item) => {
        this.item = item;
      });
    },
    getTeamMemberCategory() {
      TeamMember.getCategory().then((category) => {
        this.category = category;
      });
    },
  },
};
</script>