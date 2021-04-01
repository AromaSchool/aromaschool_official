<template>
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
            <router-link to="/" title="最新消息" class="footer_nav_link"
              >最新消息</router-link
            >
            <router-link to="/" title="國際認證" class="footer_nav_link"
              >國際認證</router-link
            >
            <router-link to="/" title="師資陣容" class="footer_nav_link"
              >師資陣容</router-link
            >
          </li>
          <li>
            <router-link to="/" title="芳療學苑" class="footer_nav_link"
              >芳療學苑</router-link
            >
            <router-link to="/" title="療程學苑" class="footer_nav_link"
              >療程學苑</router-link
            >
            <router-link to="/" title="學苑周刊" class="footer_nav_link"
              >學苑周刊</router-link
            >
          </li>
          <li>
            <router-link to="/contact" title="聯絡我們" class="footer_nav_link"
              >聯絡我們</router-link
            >
            <router-link to="/" title="常見問題" class="footer_nav_link"
              >常見問題</router-link
            >
            <router-link to="/" title="人才招募" class="footer_nav_link"
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
              href="https://www.aromaharvest.com.tw/aacd.php"
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
            ><a
              href="mailto:aroma@aromaharvest.com.tw"
              title="aroma@aromaharvest.com.tw"
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
        <a
          href="https://goo.gl/Khc3co"
          target="_blank"
          rel="noopener noreferrer"
          title="LINE"
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
          href="https://www.youtube.com/c/AromaAromaSchool/featured"
          target="_blank"
          rel="noopener noreferrer"
          title="YouTube"
          ><i class="fab fa-youtube-square"></i
        ></a>
      </div>
      <hr class="footer" />
      <div class="copyright">
        禾場國際芳療學苑版權所有 2021 ©All rights reserved.
      </div>
    </div>
  </footer>
</template>

<script>
import { routes } from "@/js/routes.js";

export default {
  data: () => ({
    routes: routes,
  }),
};
</script>