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
  },
  computed: {
    findItem: function () {
      if (this.item.length) {
        let found = null;
        if (this.$route.params.id == undefined) {
          found = this.item[0];
        }
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
        document.title = `${found.name} | 禾場國際芳療學苑`;
        return found;
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