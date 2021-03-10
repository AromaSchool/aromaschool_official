<template>
  <div>
    <Menu></Menu>
    <HistoryTime></HistoryTime>
  </div>
</template>

<script>
import Menu from "@/views/component/Menu.vue";
import HistoryTime from "@/views/about/HistoryTime.vue";

export default {
  components: {
    Menu,
    HistoryTime,
  },
};
</script>