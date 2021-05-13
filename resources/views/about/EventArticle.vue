<template>
  <div class="container">
    <ContentCenter :title="event.title" :date="event.date">
      <div v-html="event.content"></div>
    </ContentCenter>
    <BackBtn :to="to"></BackBtn>
  </div>
</template>

<script>
import { Event } from "@/js/api";
import ContentCenter from "@/views/component/ContentCenter.vue";
import BackBtn from "@/views/component/BackBtn.vue";

export default {
  components: {
    ContentCenter,
    BackBtn,
  },
  data: () => ({
    event: {},
    from: null,
  }),
  computed: {
    to: function () {
      return this.from && this.from.name == "eventList" ? null : "/about/event";
    },
  },
  beforeRouteEnter(to, from, next) {
    next((vm) => {
      vm.from = from;
    });
  },
  created() {
    // clean meta first
    this.$route.meta.title = "";
    this.getEvent();
  },
  methods: {
    getEvent() {
      Event.get(this.$route.params.id).then((response) => {
        if (!response) {
          this.$router.push({ name: "event404" });
        }
        this.event = response;

        // update document title and breadcrumbs
        this.$route.meta.title = this.title;
        document.title = `${this.title} | 禾場國際芳療學苑`;
      });
    },
  },
};
</script>