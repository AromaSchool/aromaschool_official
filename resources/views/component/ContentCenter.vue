<template>
  <section class="content_center">
    <div class="arti_title_block">
      <h3>{{ title }}</h3>
      <hr />
      <div class="arti_subtitle">
        <div class="type">{{ type }}</div>
        <div class="date">{{ date }}</div>
      </div>
    </div>
    <div class="arti_editor">
      <slot></slot>
    </div>
  </section>
</template>

<script>
export default {
  name: "article",
  props: {
    title: {
      type: String,
      required: true,
    },
    type: {
      type: String,
      default: "",
    },
    date: {
      type: String,
      required: true,
    },
  },
};
</script>
