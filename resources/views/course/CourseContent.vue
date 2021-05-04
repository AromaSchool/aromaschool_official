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
      <div class="course_box schedule" v-if="isShowSchedule == true">
        <h4 class="course_title"><i class="fas fa-book"></i>課程內容</h4>
        <slot name="schedule"></slot>
        <p class="note">※課表內容以學苑核發之實際課表為主</p>
      </div>
      <div class="course_box skill" v-if="isShowSkill == true">
        <h4 class="course_title">
          <i class="fas fa-hand-sparkles"></i>手法屬性
        </h4>
        <div class="skill_block">
          <slot name="skill"></slot>
        </div>
      </div>
      <div class="course_box process" v-if="isShowProcess == true">
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
      <div class="course_box feature" v-if="isShowFeature == true">
        <h4 class="course_title"><i class="fas fa-edit"></i>課程特色</h4>
        <slot name="feature"></slot>
      </div>
      <div class="course_box suitable" v-if="isShowSuitable == true">
        <h4 class="course_title">
          <i class="fas fa-user-friends"></i>適合對象
        </h4>
        <slot name="suitable"></slot>
      </div>
      <div class="course_box target" v-if="isShowTarget == true">
        <h4 class="course_title"><i class="fas fa-trophy"></i>培訓目標</h4>
        <slot name="target"></slot>
      </div>
      <div class="course_box payment" v-if="isShowPayment == true">
        <h4 class="course_title">
          <i class="fas fa-comments-dollar"></i>課程費用說明
        </h4>
        <slot name="payment"></slot>
      </div>
      <div class="course_box discount" v-if="isShowDiscount == true">
        <h4 class="course_title"><i class="fas fa-tags"></i>優惠方案</h4>
        <slot name="discount"></slot>
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
          <div class="classroom_box" v-if="isShowOnline == true">
            <div class="address">
              <h5><i class="fas fa-map-marker-alt"></i>線上上課</h5>
              <p>
                於 Facebook 平台觀看課程。不用配合固定上課時間，課程開放後需於
                14 天內自行安排時間觀看。
              </p>
            </div>
            <slot name="periodOnline"></slot>
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
      <div class="course_box precaution" v-if="isShowPrecaution == true">
        <h4 class="course_title">
          <i class="fas fa-exclamation-circle"></i>報名注意事項
        </h4>
        <slot name="precaution"></slot>
      </div>
      <div class="course_box notes" v-if="isShowNotes == true">
        <h4 class="course_title"><i class="far fa-clipboard"></i>上課需知</h4>
        <slot name="notes"></slot>
      </div>
      <div class="course_box measure" v-if="isShowMeasure == true">
        <h4 class="course_title">
          <i class="fas fa-head-side-mask"></i>本學苑對COVID-19的應因措施
        </h4>
        <div class="measure_box">
          <p>現在全球最關心的就是 COVID-19，本學苑與政府的資訊也是同步的。</p>
          <p>
            目前政府尚「未發佈」不上班上課的資訊，請各位一定要多注意，但切勿恐慌。（保持心情愉快，也是增強免疫力的一種方式哦）學苑目前並未因疫情而影響到開課，各位都非常期待來學芳療保健的專業（因這次的疫情，各位更重視自我保健方式了），本學苑於上課前都會提醒學員上課時戴上口罩、進教室前先進行雙手消毒、量額溫，教室也會定時消毒清潔，並全天用純天然精油擴香，且每班都為小班制。
          </p>
          <p>
            提醒大家平時還是要勤洗手、多喝水、出門戴口罩、維持良好的生活作習，身體不舒服一定要看醫生。回到家時先將衣物、物品消毒過一遍，先保護好自已。<br />
            相信我們大家都能夠平安度過這次的疫情的唷。
          </p>
          <p>祝 順心健康。</p>
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
    isShowSchedule: {
      type: Boolean,
    },
    isShowSkill: {
      type: Boolean,
    },
    isShowProcess: {
      type: Boolean,
    },
    isShowFeature: {
      type: Boolean,
    },
    isShowSuitable: {
      type: Boolean,
    },
    isShowTarget: {
      type: Boolean,
    },
    isShowPayment: {
      type: Boolean,
    },
    isShowDiscount: {
      type: Boolean,
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
    isShowOnline: {
      type: Boolean,
    },
    isShowPrecaution: {
      type: Boolean,
    },
    isShowNotes: {
      type: Boolean,
    },
    isShowMeasure: {
      type: Boolean,
    },
  },
  methods: {
    anchorHashCheck() {
      const el = document.getElementById(this.$route.hash.slice(1));
      if (el) {
        window.scrollTo(0, el.offsetTop - 80);
      }
    },
  },
  mounted() {
    this.anchorHashCheck();
  },
};
</script>
