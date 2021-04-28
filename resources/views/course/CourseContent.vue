<template>
  <section class="content_center">
    <div class="arti_title_block">
      <h3>{{ title }}</h3>
      <hr />
      <div class="arti_subtitle">
        <div class="type">{{ type }}</div>
      </div>
    </div>
    <div class="course_content_block">
      <div class="intro">
        <slot name="intro"></slot>
        <div class="btn_group">
          <a href="#period" class="btn_underline gray" title="查詢開課資訊"
            >查詢開課資訊</a
          >
          <a
            :href="registry"
            target="_blank"
            rel="noopener noreferrer"
            class="btn_underline purple"
            title="線上報名"
            >線上報名</a
          >
        </div>
      </div>
      <div class="course_box schedule">
        <h4 class="course_title"><i class="fas fa-book"></i>課程內容</h4>
        <slot name="schedule"></slot>
        <p class="note">※課表內容以學苑核發之實際課表為主</p>
      </div>
      <div class="course_box process">
        <h4 class="course_title">
          <i class="fas fa-swatchbook"></i>國際認證進修流程
        </h4>
        <slot name="process"></slot>
        <div class="btn_right">
          <a
            :href="registry"
            target="_blank"
            rel="noopener noreferrer"
            class="btn_underline purple"
            title="線上報名"
            >線上報名</a
          >
        </div>
      </div>
      <div class="course_box feature">
        <h4 class="course_title"><i class="fas fa-edit"></i>課程特色</h4>
        <slot name="feature"></slot>
      </div>
      <div class="course_box suitable">
        <h4 class="course_title">
          <i class="fas fa-user-friends"></i>適合對象
        </h4>
        <slot name="suitable"></slot>
      </div>
      <div class="course_box target">
        <h4 class="course_title"><i class="fas fa-trophy"></i>培訓目標</h4>
        <slot name="target"></slot>
      </div>
      <div class="course_box payment">
        <h4 class="course_title">
          <i class="fas fa-comments-dollar"></i>課程費用說明
        </h4>
        <slot name="payment"></slot>
      </div>
      <div class="course_box period" id="period">
        <h4 class="course_title"><i class="fas fa-school"></i>開課資訊</h4>
        <slot name="period"></slot>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "CourseContent",
  props: {
    title: {
      required: true,
    },
    type: {
      type: String,
      default: null,
    },
    registry: {
      type: String,
    },
  },
};
</script>
