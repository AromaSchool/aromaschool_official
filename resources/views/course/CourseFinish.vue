<template>
  <div>
    <picture class="course_banner">
      <source
        srcset="@/image/course/course_finish.jpg"
        media="(min-width: 769px)"
      />
      <img
        src="@/image/course/course_finish_mobile.jpg"
        alt="報名完成：我們已收到您的報名資訊，請等候專人與您電話連絡。另外，我們將致贈您「獨家優惠好禮」：個人專屬精油抓周性格分析及課程報名優惠禮。"
      />
    </picture>
    <ContentCenter :title="title" :type="type" :class="className">
      <ol>
        <li>
          請在下方圖像中選擇1個喜歡的植物，並記好專屬數字
          <div class="acc_block">
            <a
              href="https://goo.gl/Khc3co"
              target="_blank"
              rel="noopener noreferrer"
              title="1"
              class="acc_box"
            >
              <picture>
                <img src="@/image/course/acc-1.jpg" alt="1.薰衣草" />
                <div class="acc_cover">1</div>
              </picture>
            </a>
            <a
              href="https://goo.gl/Khc3co"
              target="_blank"
              rel="noopener noreferrer"
              title="2"
              class="acc_box"
            >
              <picture>
                <img src="@/image/course/acc-2.jpg" alt="2.大西洋雪松" />
                <div class="acc_cover">2</div>
              </picture>
            </a>
            <a
              href="https://goo.gl/Khc3co"
              target="_blank"
              rel="noopener noreferrer"
              title="3"
              class="acc_box"
            >
              <picture>
                <img src="@/image/course/acc-3.jpg" alt="3.甜馬鬱蘭" />
                <div class="acc_cover">3</div>
              </picture>
            </a>
            <a
              href="https://goo.gl/Khc3co"
              target="_blank"
              rel="noopener noreferrer"
              title="4"
              class="acc_box"
            >
              <picture>
                <img src="@/image/course/acc-4.jpg" alt="4.澳洲尤加利" />
                <div class="acc_cover">4</div>
              </picture>
            </a>
            <a
              href="https://goo.gl/Khc3co"
              target="_blank"
              rel="noopener noreferrer"
              title="5"
              class="acc_box"
            >
              <picture>
                <img src="@/image/course/acc-5.jpg" alt="5.快樂鼠尾草" />
                <div class="acc_cover">5</div>
              </picture>
            </a>
            <a
              href="https://goo.gl/Khc3co"
              target="_blank"
              rel="noopener noreferrer"
              title="6"
              class="acc_box"
            >
              <picture>
                <img src="@/image/course/acc-6.jpg" alt="6.岩蘭草" />
                <div class="acc_cover">6</div>
              </picture>
            </a>
            <a
              href="https://goo.gl/Khc3co"
              target="_blank"
              rel="noopener noreferrer"
              title="7"
              class="acc_box"
            >
              <picture>
                <img src="@/image/course/acc-7.jpg" alt="7.甜橙" />
                <div class="acc_cover">7</div>
              </picture>
            </a>
            <a
              href="https://goo.gl/Khc3co"
              target="_blank"
              rel="noopener noreferrer"
              title="8"
              class="acc_box"
            >
              <picture>
                <img src="@/image/course/acc-8.jpg" alt="8.佛手柑" />
                <div class="acc_cover">8</div>
              </picture>
            </a>
            <a
              href="https://goo.gl/Khc3co"
              target="_blank"
              rel="noopener noreferrer"
              title="9"
              class="acc_box"
            >
              <picture>
                <img src="@/image/course/acc-9.jpg" alt="9.杜松" />
                <div class="acc_cover">9</div>
              </picture>
            </a>
          </div>
        </li>
        <li>
          按手機指示打開 LINE app，加入《禾場國際芳療學苑》<a
            href="https://goo.gl/Khc3co"
            title="官方LINE"
            target="_blank"
            rel="noopener noreferrer"
            class="link"
            ><i class="fab fa-line"></i>LINE@</a
          >
          帳號
        </li>
        <li>請在聊天畫面留下您選擇的專屬數字及姓名（ex. 5 禾場編）</li>
        <li>我們會盡快將分析報告回覆您</li>
        <li>優惠禮將在第一堂課程直接領取</li>
      </ol>
    </ContentCenter>
    <div class="btn_group">
      <router-link to="/" class="btn_underline brown" title="回首頁"
        >回首頁</router-link
      >
    </div>
  </div>
</template>

<script>
import ContentCenter from "@/views/component/ContentCenter.vue";

export default {
  components: {
    ContentCenter,
  },
  data: () => ({
    title: "獨家優惠好禮索取方式",
    type: "獨家優惠好禮",
    className: "course_finish_block",
  }),
};
</script>
