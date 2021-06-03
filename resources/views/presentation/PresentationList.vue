<template>
  <div class="time_block_pst">
    <div class="btn_left" v-if="this.$route.params.id">
      <router-link to="/presentation/category/all" title="所有分類" class="btn_purple">
        所有分類
      </router-link>
    </div>

    <!--單一期數的所有學員-->
    <div class="time_box" v-for="semester in semesters" :key="`semester${semester.id}`">
      <!--期數&日期-->
      <div class="time_title">
        <h2 class="year_pst">{{ `高階${semester.semester}期` }}</h2>
        <div class="arti_subtitle">
          <div class="type">{{ semester.graduation }}</div>
        </div>
      </div>

      <!--學員列表-->
      <div class="student_list_box">
        <ul class="student_list">
          <li
            class="list_li"
            v-for="presentation in semester.presentations"
            :key="`presentation${presentation.id}`"
          >
            <router-link
              :to="`/presentation/${presentation.id}`"
              :title="presentation.name"
              class="list_a"
            >
              <div class="title">{{ presentation.name }}</div>
              <div class="student_icon">
                <i v-if="presentation.participate" class="fas fa-ribbon" title="研習認證"></i>
                <i
                  v-if="hasVideo(presentation.videos)"
                  class="fas fa-play-circle"
                  title="影音花絮"
                ></i>
                <i v-if="presentation.ppt" class="fas fa-file-powerpoint" title="簡報下載"></i>
              </div>
            </router-link>
          </li>
        </ul>
      </div>
      <!--學員列表-->
    </div>
    <!--單一期數的所有學員 end-->
    <infinite-loading @infinite="infiniteLoadingHandler" :identifier="infiniteId" />
  </div>
</template>

<script>
import { PresentationSemester, Symptom } from "@/js/api";

export default {
  inject: ["setTitle"],
  name: "PresentationList",
  data: () => ({
    semesters: [],
    lastIndex: null,
    infiniteId: +new Date(),
  }),
  created() {
    // Fix: Event "infinite" called twice when in tabs and scroll position is not 0
    this.infiniteLoadingHandler = window._.debounce(this.getPresentationSemesters, 100);
    if (this.$route.params.id) {
      this.getSymptom(this.$route.params.id);
    }
  },
  methods: {
    infiniteLoadingHandler() {},
    getSymptom(id) {
      return Symptom.get(id)
        .then((response) => {
          this.$route.meta.title = response.name;
          this.setTitle(response.name);
        })
        .catch(() => {
          this.$router.push({ path: "/404" });
        });
    },
    getPresentationSemesters($state) {
      PresentationSemester.getList({
        lastIndex: this.lastIndex,
        systemId: this.$route.params.id,
      }).then((response) => {
        this.lastIndex = response.lastIndex;
        if (this.lastIndex) {
          this.semesters.push(...response.list);
          $state.loaded();
        } else {
          $state.complete();
        }
      });
    },
    hasVideo(videos) {
      for (const vidoe of videos) {
        if (vidoe.url !== "") {
          return true;
        }
      }
      return false;
    },
  },
};
</script>