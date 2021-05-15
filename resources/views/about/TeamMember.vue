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
import { TeamMember, TeamMemberCategory } from "@/js/api";
import Sidebar from "@/views/component/Sidebar.vue";
import ContentCenter from "@/views/component/ContentCenter.vue";

export default {
  components: {
    Sidebar,
    ContentCenter,
  },
  inject: ["setTitle"],
  data: () => ({
    item: [],
    category: [],
  }),
  created() {
    this.getTeamMember();
    this.getTeamMemberCategory();
  },
  computed: {
    findItem: function () {
      if (this.$route.path.includes("teamMember")) {
        if (this.item.length) {
          if (this.$route.params.id == undefined) {
            return this.item[0];
          }
          let found = null;
          for (let item of this.item) {
            if (this.$route.params.id == item.id) {
              found = item;
              break;
            }
          }
          if (!found) {
            this.$router.push({ path: "/about/teamMember/404" });
          }

          this.$route.meta.title = found.name;
          this.setTitle(found.name);
          return found;
        }
      }
      return {};
    },
  },
  methods: {
    getTeamMember() {
      TeamMember.getList().then((item) => {
        this.item = item;
      });
    },
    getTeamMemberCategory() {
      TeamMemberCategory.getList().then((category) => {
        this.category = category;
      });
    },
  },
};
</script>