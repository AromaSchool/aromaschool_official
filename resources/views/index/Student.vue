<template>
  <section class="index_student_claim">
    <div class="container">
      <h3 class="index_title">學員見證<span>REVIEWS</span></h3>
      <swiper class="swiper" :options="swiperOption">
        <swiper-slide v-for="student in list" :key="student.id">
          <figure>
            <img :src="student.image" :alt="student.name" />
          </figure>
          <div class="student_data">
            <div class="name">{{ student.name }}</div>
            <div class="class_number">{{ `${student.class}${student.semester}期學員` }}</div>
            <div class="graduate_time">{{ `${student.graduation}畢業` }}</div>
          </div>
          <p>{{ student.review }}</p>
        </swiper-slide>
        <div class="swiper-pagination" slot="pagination"></div>
      </swiper>
    </div>
  </section>
</template>

<script>
// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "vue-awesome-swiper";
import SwiperCore, { Navigation, Pagination, Autoplay } from "swiper";
// Import Swiper styles
import "swiper/swiper-bundle.css";
import { Review } from "@/js/api";

SwiperCore.use([Navigation, Pagination, Autoplay]);

export default {
  components: {
    Swiper,
    SwiperSlide,
  },
  data() {
    return {
      list: [],
      swiperOption: {
        slidesPerView: 1,
        spaceBetween: 20,
        slidesPerGroup: 3,
        loop: true,
        // loopFillGroupWithBlank: true,
        autoplay: {
          delay: 1500,
          disableOnInteraction: true,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          640: {
            slidesPerView: 1,
            slidesPerGroup: 1,
          },
          768: {
            slidesPerView: 2,
            slidesPerGroup: 2,
          },
          1024: {
            slidesPerView: 3,
            slidesPerGroup: 3,
          },
        },
      },
    };
  },
  created() {
    Review.getList().then((response) => {
      this.list = response;
    });
  },
};
</script>
