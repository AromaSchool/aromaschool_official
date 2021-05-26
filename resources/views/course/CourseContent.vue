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
        <div class="video_block">
          <iframe
            width="560"
            height="315"
            src="https://www.youtube.com/embed/WdU2gMNeesk"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
        </div>
        <slot name="intro"></slot>
        <div class="btn_group solid">
          <router-link :to="registry" class="btn_solid purple" title="線上報名"
            >線上報名</router-link
          >
          <router-link
            to="#period"
            @click.native="anchorHashCheck"
            class="btn_solid gray"
            title="查詢開課資訊"
            >查詢開課資訊</router-link
          >
        </div>
      </div>
      <div class="course_box schedule" v-if="isShowSchedule == true">
        <h4 class="course_title"><i class="fas fa-book"></i>課程內容</h4>
        <slot name="schedule"></slot>
        <p class="note">※課表內容以學苑核發之實際課表為主</p>
      </div>
      <div class="course_box skill" v-if="isShowSkill == true">
        <h4 class="course_title"><i class="fas fa-hand-sparkles"></i>手法屬性</h4>
        <div class="skill_block">
          <slot name="skill"></slot>
        </div>
      </div>
      <div class="course_box process" v-if="isShowProcess == true">
        <h4 class="course_title"><i class="fas fa-swatchbook"></i>國際認證進修流程</h4>
        <slot name="process"></slot>
        <div class="btn_right">
          <router-link :to="registry" class="btn_solid purple" title="線上報名"
            >線上報名</router-link
          >
        </div>
      </div>
      <div class="course_box feature" v-if="isShowFeature == true">
        <h4 class="course_title"><i class="fas fa-edit"></i>課程特色</h4>
        <slot name="feature"></slot>
      </div>
      <div class="course_box suitable" v-if="isShowSuitable == true">
        <h4 class="course_title"><i class="fas fa-user-friends"></i>適合對象</h4>
        <slot name="suitable"></slot>
      </div>
      <div class="course_box target" v-if="isShowTarget == true">
        <h4 class="course_title"><i class="fas fa-trophy"></i>培訓目標</h4>
        <slot name="target"></slot>
      </div>
      <div class="course_box payment" v-if="isShowPayment == true">
        <h4 class="course_title"><i class="fas fa-comments-dollar"></i>課程費用說明</h4>
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
              <router-link :to="registry" class="btn_solid purple" title="線上報名"
                >線上報名</router-link
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
              <router-link :to="registry" class="btn_solid purple" title="線上報名"
                >線上報名</router-link
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
              <router-link :to="registry" class="btn_solid purple" title="線上報名"
                >線上報名</router-link
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
              <router-link :to="registry" class="btn_solid purple" title="線上報名"
                >線上報名</router-link
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
              <router-link :to="registry" class="btn_solid purple" title="線上報名"
                >線上報名</router-link
              >
            </div>
          </div>
          <div class="classroom_box" v-if="isShowOnline == true">
            <div class="address">
              <h5><i class="fas fa-map-marker-alt"></i>線上上課</h5>
              <p v-if="onlineMode == 'vedio'">
                於 Facebook
                平台觀看課程。不用配合固定上課時間，課程開放後需於期限內自行安排時間觀看。
              </p>
              <p v-if="onlineMode == 'audio'">
                利用手機、平版、電腦收聽課程，並按課程指導進行遠距函授課程。
              </p>
            </div>
            <slot name="periodOnline"></slot>
            <div class="btn_right">
              <router-link :to="registry" class="btn_solid purple" title="線上報名"
                >線上報名</router-link
              >
            </div>
          </div>
        </div>
      </div>
      <div class="course_box precaution" v-if="isShowPrecaution == true">
        <h4 class="course_title"><i class="fas fa-exclamation-circle"></i>報名注意事項</h4>
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
            中央流行疫情指揮中心於5/15發佈，從5/15~5/28提升雙北地區疫情警戒至第三級
            <a
              href="https://www.cdc.gov.tw/Bulletin/Detail/E7bi2j8UYj1Rmz73OPE7Yg?typeid=9"
              title="相關資訊"
              target="_blank"
              rel="noopener noreferrer"
              class="link"
              >( 相關資訊 )</a
            ><br />
            5/17中央流行疫情指揮中心，正式公佈補習班停課。為考量到各位學員及講師的安全，本學苑也配合政府於5/28前暫停面授課程。
          </p>
          <p>
            學苑的課程安排方式為每個月都會開設新梯次，所以學苑會於近期通知關於後續課程安排的事宜。學員也可主動留言至
            <a
              href="https://goo.gl/Khc3co"
              title="官方LINE"
              target="_blank"
              rel="noopener noreferrer"
              class="link"
              ><i class="fab fa-line"></i>官方LINE</a
            >
            告知想參加6月份之後的哪一個梯次。<br />
            相信大家都知道芳香療法對於自身保健及保護都有相當的回饋，學苑會盡力讓學員在安全的情況下盡快參加到期待的芳療課程。
          </p>
          <p>
            本學苑教室採取定時消毒清潔，課程每班都為小班制，上課學員採「間隔坐」，學苑全天侯用純天然精油進行擴香。
            上課前都會提醒學員、講師於上課時「全程」戴口罩、自備水杯、進教室前先進行雙手酒精消毒、量額溫。
          </p>
          <p>
            另外也提醒大家，對於疫情方面，每天關注新聞動態資訊，但切勿恐慌。（保持心情正向愉快，也是提升免疫力的一種方式哦）
            <br />
            平時要勤洗手、多喝水、出門戴口罩、維持良好的生活作息。
            回到家時先將衣物、物品消毒過一遍，先保護好自已。 身體確認有不適請先向相關醫療單位諮詢。
            <br />
            相信台灣、相信全世界，相信我們大家都能夠平安度過這次的疫情。
          </p>
          <p>祝 順心健康。</p>
          <div class="btn_right">
            <router-link :to="registry" class="btn_solid purple" title="線上報名"
              >線上報名</router-link
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
  inject: ["setDescription"],
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
    onlineMode: {
      type: String,
    },
  },
  methods: {
    anchorHashCheck() {
      const el = document.getElementById(this.$route.hash.slice(1));
      if (el) {
        window.scrollTo({
          top: el.offsetTop - 80,
          left: 0,
          behavior: "smooth",
        });
      }
    },
  },
  mounted() {
    this.anchorHashCheck();

    let intro = "";
    for (const vnode of this.$slots.intro) {
      if (vnode.children && vnode.children[0].text) {
        intro = `${intro}${vnode.children[0].text}`;
      }
    }
    this.setDescription(intro);
  },
};
</script>
