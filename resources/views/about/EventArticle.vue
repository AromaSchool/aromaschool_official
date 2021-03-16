<template>
  <div class="container">
    <ContentCenter :title="title" :date="date">
      <div v-html="content"></div>
    </ContentCenter>
    <BackBtn></BackBtn>
  </div>
</template>

<script>
import { Event } from "@/js/api";
import moment from "moment";
import ContentCenter from "@/views/component/ContentCenter.vue";
import BackBtn from "@/views/component/BackBtn.vue";

export default {
  components: {
    ContentCenter,
    BackBtn,
  },
  data: () => ({
    title: "",
    content: "",
    date: "",
  }),
  created() {
    this.getEvent();
  },
  methods: {
    getEvent() {
      Event.get(this.$route.params.id).then((response) => {
        this.title = response.title;
        this.content = response.content;
        this.date = moment(response.date).format("YYYY/MM/DD");
      });
    },
  },
};
</script>