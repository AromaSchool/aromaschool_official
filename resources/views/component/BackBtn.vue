<template>
  <a class="btn_underline brown back" title="返回列表" @click="goBack"
    >返回列表</a
  >
</template>

<script>
export default {
  methods: {
    goBack() {
      this.$router.push({ name: "eventList" });
    },
  },
};
</script>