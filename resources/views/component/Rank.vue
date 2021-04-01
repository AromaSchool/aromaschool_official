<template>
  <div class="subside_block rank">
    <h2>最新公告</h2>
    <ol class="subside_box">
      <li v-for="item in rank" :key="item.id">
        <router-link :to="item.to" :title="item.title">{{
          item.title
        }}</router-link>
      </li>
    </ol>
  </div>
</template>

<script>
export default {
  props: {
    rank: {
      type: Array,
      default: [],
    },
  },
};
</script>