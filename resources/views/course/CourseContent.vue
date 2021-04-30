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
          <router-link
            to="#period"
            @click.native="anchorHashCheck"
            class="btn_underline gray"
            title="查詢開課資訊"
            >查詢開課資訊</router-link
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
        <div class="classroom_block">
          <div class="classroom_box" v-if="isShowTaipei == true">
            <div class="address">
              <h5><i class="fas fa-map-marker-alt"></i>台北教室</h5>
              <p>台北市大安區忠孝東路四段191號10樓之1</p>
            </div>
            <slot name="periodTaipei"></slot>
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
          <div class="classroom_box" v-if="isShowTaichung == true">
            <div class="address">
              <h5><i class="fas fa-map-marker-alt"></i>台中教室</h5>
              <p>台中市南屯區五權西路二段666號6樓之5</p>
            </div>
            <slot name="periodTaichung"></slot>
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
          <div class="classroom_box" v-if="isShowHsinchu == true">
            <div class="address">
              <h5><i class="fas fa-map-marker-alt"></i>新竹教室</h5>
              <p>新竹市東區光復路二段295號17樓之1</p>
            </div>
            <slot name="periodHsinchu"></slot>
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
          <div class="classroom_box" v-if="isShowTainan == true">
            <div class="address">
              <h5><i class="fas fa-map-marker-alt"></i>台南教室</h5>
              <p>地點另行通知</p>
            </div>
            <slot name="periodTainan"></slot>
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
          <div class="classroom_box" v-if="isShowKaohsiung == true">
            <div class="address">
              <h5><i class="fas fa-map-marker-alt"></i>高雄教室</h5>
              <p>地點另行通知</p>
            </div>
            <slot name="periodKaohsiung"></slot>
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
        </div>
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
    isShowTaipei: {
      type: Boolean,
    },
    isShowTaichung: {
      type: Boolean,
    },
    isShowHsinchu: {
      type: Boolean,
    },
    isShowTainan: {
      type: Boolean,
    },
    isShowKaohsiung: {
      type: Boolean,
    },
  },
  methods: {
    anchorHashCheck() {
      if (window.location.hash === this.$route.hash) {
        const el = document.getElementById(this.$route.hash.slice(1));
        if (el) {
          window.scrollTo(0, el.offsetTop - 100);
        }
      }
    },
  },
  mounted() {
    this.anchorHashCheck();
  },
};
</script>
