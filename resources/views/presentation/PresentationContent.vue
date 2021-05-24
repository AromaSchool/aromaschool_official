<template>
  <section class="content_center">
    <div class="arti_title_block">
      <h3>{{ title }}</h3>
      <hr />
      <div class="arti_subtitle">
        <div class="type">{{ type }}</div>
      </div>
    </div>
    <div class="presentation_content_block">
      <div class="student_info_block">
        <picture>
          <img :src="firstImage" :alt="title" />
        </picture>
        <div class="student_info_box">
          <div class="name_box">
            <h4>{{ title }}</h4>
            <div class="label_block">
              <div class="label_box" title="研習認證">
                <i class="fas fa-ribbon"></i>
              </div>
              <div class="label_box" title="影音花絮">
                <i class="fas fa-play-circle-circle"></i>
              </div>
              <div class="label_box" title="簡報下載">
                <i class="fas fa-file-download"></i>
              </div>
            </div>
          </div>
          <div class="date_box">{{ date }} 畢業</div>
          <div class="symptom_block">
            <div class="symptom_tag">皮膚乾燥</div>
            <div class="symptom_tag">斑點細紋</div>
            <div class="symptom_tag">紋路明顯</div>
          </div>
          <a
            href="https://drive.google.com/file/d/1Mel7ZIo3UycfElb2EJwiN9bpaIYSP1kC/view?usp=sharing"
            target="_blank"
            rel="noopener noferrer"
            title="發表簡報下載"
            class="btn_download"
            ><i class="fas fa-file-download"></i>發表簡報下載</a
          >
        </div>
      </div>
      <q>{{ summary }}</q>
      <div class="course_box">
        <h4 class="course_title"><i class="fas fa-play-circle-circle"></i>影音花絮</h4>
        <div class="video_block">
          <div class="video_box" v-for="video in videos" :key="video.title">
            <iframe
              width="560"
              height="315"
              :src="video.url"
              :title="video.title"
              frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
              allowfullscreen
            ></iframe>
            <h5>{{ video.title }}</h5>
          </div>
        </div>
      </div>
      <div class="course_box">
        <h4 class="course_title"><i class="fas fa-comment-dots"></i>發表內容</h4>
        <div class="arti_editor presentation_content">
          <p>
            個案的配合度超高，對於芳療師開的功課都能按時做到。也時常跟芳療師回報自己遇到的問題，例如第二次個案覺得滋潤度有，但皮膚偏乾等，當下即可因個案需求調整配方，讓個案覺得使用油及芳療是一個開心的歷程。
          </p>
          <p>
            而我自己每次看到個案的肌膚有一點一點的進展，也覺得自信心大增非常有成就感，最希望的是看到個案臉上那些成年的斑點，能夠慢慢淡化到不明顯。雖然個案作業已經結束，但仍然繼續跟個案一起努力，讓他的肌膚越來越美。
          </p>
          <p>自己的目標是，可以當一位以最天然方式療癒他人的行動芳療師。</p>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  name: "PresentationContent",
  inject: ["setDescription"],
  data: () => ({
    videos: [
      { title: "發表會側錄", url: "https://www.youtube.com/embed/5bntI-qZo3s" },
      { title: "學員心得推薦", url: "https://www.youtube.com/embed/UfcvK1mREUI" },
    ],
  }),
  props: {
    title: {
      type: String,
      required: true,
    },
    type: {
      type: String,
      required: true,
    },
    firstImage: {
      type: String,
      default: "/images/student_default.svg",
    },
    date: {
      type: String,
      required: true,
    },
    summary: {
      type: String,
      required: true,
    },
  },
};
</script>
