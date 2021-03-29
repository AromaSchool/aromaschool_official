<template>
  <section class="sub_side">
    <SearchBox></SearchBox>
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
};
</script>
