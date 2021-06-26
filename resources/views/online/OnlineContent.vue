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
          <div class="overlay" v-if="!isShow">
            <i class="fas fa-lock"></i>
            <h4>付費課程</h4>
            <p>請先報名課程喔！<br />任何問題歡迎與我們聯繫！</p>
          </div>
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
      </div>
      <div class="course_box">
        <h4 class="course_title"><i class="far fa-clock"></i>收視期間</h4>
        <slot name="period" v-if="isShow"></slot>
        <div class="lock_content" v-else>
          <p><i class="fas fa-lock"></i>僅限購課學員可見</p>
        </div>
      </div>

      <div class="course_box feature">
        <h4 class="course_title"><i class="fas fa-edit"></i>課程說明</h4>
        <slot name="feature"></slot>
        <p>
          《禾場國際芳療學苑》有錄影直播課程囉！不必舟車勞頓，在家也能學習專業芳香療法課程！
          疫情影響喚醒大家對身心靈照護的重視，越來越多人懂得用精油來維持健康。但市面上的精油品牌琳瑯滿目，卻不知道該如何選擇？為什麼買了精油卻感覺不到它神奇療效？要如何運用精油能量在自己和家人身上？想要認識芳香療法卻苦無時間學習？
          如果你有以上煩惱，《禾場國際芳療學苑》錄影直播課程就是你最好的選擇！
          「芳香療法基礎入門班」是專門為初次接觸芳療的精油愛好者所設計的課程，目的在於建立芳療的基本觀念及日常使用方法，課程內容以美國NAHA及英國IFPA芳療師協會研究多年的系統來架構，《禾場國際芳療學苑》更獨創大量的實作及個案研討，將芳療融入生活才能夠發揮精油療癒身心的本質，錄影直播課程讓零碎的通勤時刻，變身你專屬的芳療進修時間。
        </p>
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
    isShow: {
      type: Boolean,
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
