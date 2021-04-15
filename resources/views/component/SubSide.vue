<template>
  <section class="sub_side">
    <SearchBox v-model="searchValue" @enter="onSearch"></SearchBox>
    <Type
      :categories="categories"
      :categoriesPath="categoriesPath"
      :categoriesTitle="categoriesTitle"
    ></Type>
    <Rank :rank="rank" :rankTitle="rankTitle"></Rank>
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
    categories: {
      type: Array,
      default: () => [],
    },
    categoriesPath: {
      type: String,
      required: true,
    },
    rank: {
      type: Array,
      default: () => [],
    },
    rankTitle: {
      type: String,
      required: true,
    },
    categoriesTitle: {
      type: String,
      require: true,
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
  methods: {
    onSearch() {
      this.$emit("search");
    },
  },
};
</script>
