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
      <div class="arti_keyword" v-if="$route.matched[0].name == 'blog'">
        <router-link to="/" class="keyword_box">NAHA</router-link>
        <router-link to="/" class="keyword_box">岩蘭草</router-link>
        <router-link to="/" class="keyword_box">神經</router-link>
        <router-link to="/" class="keyword_box">精油</router-link>
      </div>
      <div class="arti_author" v-if="$route.matched[0].name == 'blog'">
        <figure class="author_image">
          <img src="@/image/index/student_default.svg" alt="Evelyn 芳療師" />
        </figure>
        <div class="author_info">
          <h4 class="name">Evelyn 芳療師</h4>
          <p class="intro">
            法國凡爾賽音樂院鋼琴演奏碩士，美國NAHA國際專業芳療師認證。留法返台後除了教授鋼琴並跨界多元發展，在彈琴之餘還聞香、調香，樂於分享芳香療法幫助每個人找回身心最自然的韻律。
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
  },
};
</script>
