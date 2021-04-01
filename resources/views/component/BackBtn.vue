<template>
  <a class="btn_underline brown back" title="返回列表" @click="goBack"
    >返回列表</a
  >
</template>

<script>
export default {
  props: {
    to: {
      type: String,
      default: null,
    },
  },
  methods: {
    goBack() {
      if (this.to) {
        this.$router.push(this.to);
      } else {
        this.$router.go(-1);
      }
    },
  },
};
</script>