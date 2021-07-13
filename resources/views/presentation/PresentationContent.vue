<template>
  <section class="content_center">
    <div class="arti_title_block">
      <h3>{{ presentation.title || presentation.name }}</h3>
      <h4 v-if="presentation.title">{{ presentation.name }}</h4>
      <hr />
      <div class="arti_subtitle">
        <div class="type">{{ `高階${presentation.semester.semester}期學員` }}</div>
      </div>
    </div>
    <div class="presentation_content_block">
      <div class="student_info_block">
        <picture>
          <img :src="presentation.image" :alt="presentation.name" />
        </picture>
        <div class="student_info_box">
          <div class="name_box">
            <h4><span class="h6">芳療師</span> {{ presentation.name }}</h4>
            <div class="label_block">
              <div v-if="presentation.participate" class="label_box" title="研習認證">
                <i class="fas fa-ribbon"></i>
              </div>
              <div v-if="presentation.videos.length" class="label_box" title="影音花絮">
                <i class="fas fa-play-circle"></i>
              </div>
              <div v-if="presentation.ppt" class="label_box" title="簡報下載">
                <i class="fas fa-file-download"></i>
              </div>
            </div>
          </div>
          <div class="date_box">{{ `${presentation.semester.graduation} 畢業` }}</div>
          <div class="symptom_block">
            <div
              class="symptom_tag"
              v-for="symptom in presentation.symptoms"
              :key="`symptom${symptom.id}`"
            >
              {{ symptom.name }}
            </div>
          </div>
          <div class="symptom_block">
            <div
              class="symptom_tag"
              v-for="essentialOil in presentation.essentialOils"
              :key="`essential_oil_${essentialOil.id}`"
            >
              {{ essentialOil.name }}
            </div>
          </div>
          <a
            v-if="presentation.ppt"
            :href="presentation.ppt"
            target="_blank"
            rel="noopener noferrer"
            title="發表簡報下載"
            class="btn_download"
            ><i class="fas fa-file-download"></i>發表簡報下載</a
          >
        </div>
      </div>
      <q>{{ presentation.summary }}</q>
      <div class="course_box" v-if="hasVideo(presentation.videos)">
        <h4 class="course_title"><i class="fas fa-play-circle"></i>影音花絮</h4>
        <div class="video_block">
          <template v-for="(video, index) in presentation.videos.slice(0, 2)">
            <div class="video_box" v-if="video.url != ''" :key="`video${video.id}`">
              <iframe
                width="560"
                height="315"
                :src="video.url"
                :title="titles[index]"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
              <h5>{{ titles[index] }}</h5>
            </div>
          </template>
        </div>
      </div>
      <div class="course_box">
        <h4 class="course_title"><i class="fas fa-comment-dots"></i>發表內容</h4>
        <div class="arti_editor presentation_content" v-html="presentation.content"></div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "PresentationContent",
  inject: ["setDescription"],
  data: () => ({
    titles: ["發表會側錄", "學員心得推薦"],
  }),
  props: {
    presentation: {
      required: true,
    },
  },
  methods: {
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
