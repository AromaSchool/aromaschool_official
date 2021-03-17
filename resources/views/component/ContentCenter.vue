<template>
  <section class="content_center">
    <div class="arti_title_block">
      <h3>{{ title }}</h3>
      <hr />
      <div class="arti_subtitle">
        <div class="type" v-if="type != null">{{ type }}</div>
        <div class="deco" v-if="type != null && date != null">．</div>
        <div class="date" v-if="date != null">{{ date }}</div>
      </div>
    </div>
    <div class="arti_content" :class="{ flex: $route.name == 'teamMember' }">
      <figure v-if="firstImage != null">
        <img :src="firstImage" :alt="title" />
      </figure>
      <div class="arti_editor">
        <slot></slot>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "blogContent",
  props: {
    title: {
      type: String,
      required: true,
    },
    type: {
      type: String,
      default: null,
    },
    date: {
      type: String,
    },
    firstImage: {
      type: String,
    },
  },
};
</script>
