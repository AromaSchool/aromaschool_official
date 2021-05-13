<template>
  <div class="subside_block rank">
    <h2>{{ rankTitle }}</h2>
    <template v-if="rank.length != 0">
      <ol class="subside_box">
        <li v-for="item in rank" :key="item.id">
          <router-link :to="item.to" :title="item.title">{{
            item.title
          }}</router-link>
        </li>
      </ol>
    </template>
    <PuSkeleton :count="5" v-else />
  </div>
</template>

<script>
export default {
  props: {
    rank: {
      type: Array,
      default: [],
    },
    rankTitle: {
      type: String,
      required: true,
    },
  },
};
</script>