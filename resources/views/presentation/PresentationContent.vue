<template>
  <section class="content_center">
    <div class="arti_title_block">
      <h3>{{ title }}</h3>
      <hr />
      <div class="arti_subtitle">
        <div class="type">{{ type }}</div>
      </div>
    </div>
    <div class="presentation_content_block">
      <div class="student_info_block">
        <picture>
          <img :src="firstImage" :alt="title" />
        </picture>
        <div class="student_info_box">
          <div class="name_box">
            <h4>歐沐慈</h4>
            <div class="label_block">
              <div class="label_box">
                <i class="fas fa-ribbon"></i>
              </div>
              <div class="label_box">
                <i class="fas fa-play"></i>
              </div>
              <div class="label_box">
                <i class="fas fa-file-powerpoint"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "CourseContent",
  inject: ["setDescription"],
  props: {
    title: {
      required: true,
    },
    type: {
      type: String,
      default: null,
    },
    firstImage: {
      type: String,
      default: "/images/student_default.svg",
    },
  },
};
</script>
