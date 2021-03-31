<template>
  <section class="sub_side">
    <SearchBox v-model="searchValue"></SearchBox>
    <Type></Type>
    <Rank></Rank>
  </section>
</template>

<script>
import SearchBox from "@/views/component/SearchBox.vue";
import Type from "@/views/component/Type.vue";
import Rank from "@/views/component/Rank.vue";

export default {
  components: {
    SearchBox,
    Type,
    Rank,
  },
  props: {
    value: {
      type: String,
      default: "",
    },
  },
  data: () => ({
    data: "",
  }),
  computed: {
    searchValue: {
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
