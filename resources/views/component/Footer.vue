<template>
  <div>
    <footer>
      <div class="container">
        <figure>
          <img src="@/image/logo_white.svg" alt="logo" />
        </figure>
        <div class="footer_content">
          <ul class="footer_nav">
            <li>
              <router-link
                to="/about/event"
                :title="routes[1].children[1].meta.title"
                class="footer_nav_link"
                >{{ routes[1].children[1].meta.title }}</router-link
              >
              <router-link
                to="/news/category/all"
                :title="routes[2].meta.title"
                class="footer_nav_link"
                >{{ routes[2].meta.title }}</router-link
              >
              <router-link
                to="/about/interCert/NAHA/about"
                :title="routes[1].children[2].meta.title"
                class="footer_nav_link"
                >{{ routes[1].children[2].meta.title }}</router-link
              >
              <router-link
                to="/about/teamMember"
                :title="routes[1].children[3].meta.title"
                class="footer_nav_link"
                >{{ routes[1].children[3].meta.title }}</router-link
              >
            </li>
            <li>
              <router-link
                to="/course/aromatherapy/elementary"
                title="芳療學苑"
                class="footer_nav_link"
                >芳療學苑</router-link
              >
              <router-link to="/course/treatment/british" title="療程學苑" class="footer_nav_link"
                >療程學苑</router-link
              >
              <router-link to="/course/online/elementary" title="網路學苑" class="footer_nav_link"
                >網路學苑</router-link
              >
              <router-link to="/blog/category/all" title="學苑周刊" class="footer_nav_link"
                >學苑周刊</router-link
              >
            </li>
            <li>
              <router-link to="/contact" title="聯絡我們" class="footer_nav_link"
                >聯絡我們</router-link
              >
              <router-link to="/faq" title="常見問題" class="footer_nav_link">常見問題</router-link>
              <router-link to="/recruit" title="人才招募" class="footer_nav_link"
                >人才招募</router-link
              >
            </li>
            <li>
              <a
                href="https://www.aromaharvest.com/"
                title="沐禾 AromaHarvest"
                target="_blank"
                rel="noopener noreferrer"
                class="footer_nav_link"
                >沐禾 AromaHarvest</a
              >
              <a
                href="https://aacd.aromaschool.com.tw/"
                title="產品檢測報告查詢系統"
                target="_blank"
                rel="noopener noreferrer"
                class="footer_nav_link"
                >產品檢測報告查詢系統</a
              >
            </li>
          </ul>
          <ul class="footer_info">
            <li>
              <i class="fas fa-phone"></i
              ><a href="tel:02-27112290" title="02-27112290">02-27112290</a>
            </li>
            <li><i class="fas fa-fax"></i>02-27113370</li>
            <li>
              <i class="fas fa-envelope"></i
              ><a href="mailto:aroma@aromaharvest.com.tw" title="aroma@aromaharvest.com.tw"
                >aroma@aromaharvest.com.tw</a
              >
            </li>
            <li class="break_icon">
              <i class="fas fa-map-marker-alt"></i>
              <div class="location">
                <a
                  href="https://goo.gl/maps/ErBgtqhaWuwcrKyG7"
                  target="_blank"
                  rel="noopener noreferrer"
                  title="台北教室 | 台北市大安區忠孝東路四段191號10樓之1"
                  >台北教室 | 台北市大安區忠孝東路四段191號10樓之1</a
                >
                <a
                  href="https://goo.gl/maps/4jryCSiGVUtzCSbb6"
                  target="_blank"
                  rel="noopener noreferrer"
                  title="台中教室 | 台中市南屯區五權西路二段666號6樓之5"
                  >台中教室 | 台中市南屯區五權西路二段666號6樓之5</a
                >
                <a
                  href="https://goo.gl/maps/VF1dpuuVGXN5JeVV6"
                  target="_blank"
                  rel="noopener noreferrer"
                  title="新竹教室 | 新竹市東區光復路二段295號17樓之1"
                  >新竹教室 | 新竹市東區光復路二段295號17樓之1</a
                >
              </div>
            </li>
          </ul>
        </div>
        <div class="social_media">
          <a
            href="https://www.facebook.com/AromaSchool"
            target="_blank"
            rel="noopener noreferrer"
            title="Facebook"
            ><i class="fab fa-facebook-f"></i
          ></a>
          <a href="https://goo.gl/Khc3co" target="_blank" rel="noopener noreferrer" title="LINE"
            ><i class="fab fa-line"></i
          ></a>
          <a
            href="https://www.instagram.com/aromaharvest.tw/"
            target="_blank"
            rel="noopener noreferrer"
            title="Instagram"
            ><i class="fab fa-instagram"></i
          ></a>
          <a
            href="https://www.youtube.com/channel/UCme0qGnHRgP-56f3l2P0Dsg"
            target="_blank"
            rel="noopener noreferrer"
            title="YouTube"
            ><i class="fab fa-youtube-square"></i
          ></a>
        </div>
        <hr class="footer" />
        <div class="copyright">禾場國際芳療學苑版權所有 2021 ©All rights reserved.</div>
      </div>
    </footer>
    <section class="fixed_block">
      <div id="goTop" class="fixed_box" @click="goTop()">TOP</div>
    </section>
  </div>
</template>

<script>
import { routes } from "@/js/routes.js";

export default {
  data: () => ({
    routes: routes,
  }),
  mounted() {
    window.addEventListener("scroll", this.showBtn);
  },
  methods: {
    showBtn() {
      let goTopBtn = document.getElementById("goTop");
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        goTopBtn.classList.add("show");
      } else {
        goTopBtn.classList.remove("show");
      }
    },
    goTop() {
      window.scroll({
        top: 0,
        left: 0,
        behavior: "smooth",
      });
    },
  },
};
</script>