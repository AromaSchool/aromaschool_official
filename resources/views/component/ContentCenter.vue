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
    <div
      class="arti_content"
      :class="{ flex: $route.matched[1].name == 'teamMember' }"
    >
      <figure class="first_image" v-if="firstImage != null">
        <img :src="firstImage" :alt="title" />
      </figure>
      <div class="arti_editor">
        <slot></slot>
      </div>
      <div class="arti_keyword" v-if="keywords.length">
        <router-link
          :to="`/blog/category/all?keyword=${keyword.id}`"
          class="keyword_box"
          v-for="keyword in keywords"
          :key="keyword.id"
        >
          {{ keyword.name }}
        </router-link>
      </div>
      <div class="arti_author" v-if="author.name">
        <figure class="author_image">
          <img :src="author.image" :alt="author.name" />
        </figure>
        <div class="author_info">
          <h4 class="name">{{ author.name }}</h4>
          <p class="intro">
            {{ author.bio }}
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "ContentCenter",
  props: {
    title: {
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
    keywords: {
      type: Array,
      default: () => [],
    },
    author: {
      type: Object,
      default: null,
    },
  },
};
</script>
