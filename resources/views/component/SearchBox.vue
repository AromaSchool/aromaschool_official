<template>
  <div class="search_box side">
    <input
      type="search"
      placeholder="Search..."
      class="search_input"
      v-model="data"
    />
    <button type="submit" class="search_btn">
      <i class="fas fa-search"></i>
    </button>
  </div>
</template>

<script>
export default {
  props: {
    value: {
      type: String,
      default: "",
    },
  },
  computed: {
    data: {
      get: function () {
        return this.value;
      },
      set: function (v) {
        this.$emit("input", v);
      },
    },
  },
};
</script>