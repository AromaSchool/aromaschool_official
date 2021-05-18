<template>
  <div>
    <picture class="course_banner">
      <source srcset="@/image/course/course_sign_up.jpg" media="(min-width: 769px)" />
      <img
        src="@/image/course/course_sign_up_mobile.jpg"
        alt="芳療課程線上報名：從這裡開始建立芳療的基礎觀念及基本運用方法，感受精油的自然療癒力量，引領您進入芳療的世界。"
      />
    </picture>
    <section class="contact_form signup_form">
      <p class="hint">
        如想報名芳療課程，歡迎填表諮詢，將有專人和您聯絡。
        <span>(*)為必填項目</span>
      </p>
      <form class="contact_form_block" @submit="signUp">
        <div class="form_box">
          <label for="inputName" class="form_label">姓名<span class="hint">*</span></label>
          <input
            id="inputName"
            class="form_input"
            type="text"
            placeholder="請輸入您的姓名"
            v-model="courseSignUp.name"
            required
          />
        </div>
        <div class="form_box">
          <label for="inputPhone" class="form_label">聯絡電話<span class="hint">*</span></label>
          <input
            id="inputPhone"
            class="form_input"
            type="text"
            placeholder="請輸入您的聯絡電話"
            pattern="^(09)\d{8}$"
            v-model="courseSignUp.phone"
            required
          />
        </div>
        <div class="form_box">
          <label for="inputMail" class="form_label">電子郵件<span class="hint">*</span></label>
          <input
            id="inputMail"
            class="form_input"
            type="email"
            placeholder="請輸入您的E-mail"
            pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
            v-model="courseSignUp.mail"
            required
          />
        </div>
        <div class="form_box">
          <label for="inputCourse" class="form_label"
            >您感興趣的課程 (可複選)
            <span class="hint">*</span>
          </label>
          <div class="form_course_block">
            <div class="form_course_box">
              <span class="category">芳療學苑</span>
              <div class="check_box_group">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="aromatherapy_elementary"
                    :value="courses.AROMATHERAPY.ELEMENTARY"
                    @click="selectCourse"
                    ref="course"
                  />
                  <label class="form-check-label" for="aromatherapy_elementary"
                    >芳香療法認證課程入門班</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="aromatherapy_intermediate"
                    :value="courses.AROMATHERAPY.INTERMEDIATE"
                    @click="selectCourse"
                  />
                  <label class="form-check-label" for="aromatherapy_intermediate"
                    >芳香療法認證課程中階班</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="aromatherapy_advanced"
                    :value="courses.AROMATHERAPY.ADVANCED"
                    @click="selectCourse"
                  />
                  <label class="form-check-label" for="aromatherapy_advanced"
                    >芳香療法認證課程高階班</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="aromatherapy_clinical"
                    :value="courses.AROMATHERAPY.CLINICAL"
                    @click="selectCourse"
                  />
                  <label class="form-check-label" for="aromatherapy_clinical"
                    >臨床芳療師認證課程</label
                  >
                </div>
              </div>
            </div>
            <div class="form_course_box">
              <span class="category">療程學苑</span>
              <div class="check_box_group">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="treatment_british"
                    :value="courses.TREATMENT.BRITISH"
                    @click="selectCourse"
                  />
                  <label class="form-check-label" for="treatment_british">英式芳療按摩療程</label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="treatment_lymphatic"
                    :value="courses.TREATMENT.LYMPHATIC"
                    @click="selectCourse"
                  />
                  <label class="form-check-label" for="treatment_lymphatic">淋巴引流按摩療程</label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="treatment_facial"
                    :value="courses.TREATMENT.FACIAL"
                    @click="selectCourse"
                  />
                  <label class="form-check-label" for="treatment_facial">顱顏深層按摩療程</label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="treatment_pregnancy"
                    :value="courses.TREATMENT.PREGNANCY"
                    @click="selectCourse"
                  />
                  <label class="form-check-label" for="treatment_pregnancy">孕產婦芳療療程</label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="treatment_myofascial"
                    :value="courses.TREATMENT.MYOFASCIAL"
                    @click="selectCourse"
                  />
                  <label class="form-check-label" for="treatment_myofascial">肌筋膜系列課程</label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="treatment_swedish"
                    :value="courses.TREATMENT.SWEDISH"
                    @click="selectCourse"
                  />
                  <label class="form-check-label" for="treatment_swedish">瑞典式按摩療程</label>
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="treatment_meridian"
                    :value="courses.TREATMENT.MERIDIAN"
                    @click="selectCourse"
                  />
                  <label class="form-check-label" for="treatment_meridian">經絡按摩療程</label>
                </div>
              </div>
            </div>
            <div class="form_course_box">
              <span class="category">網路學苑</span>
              <div class="check_box_group">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="online_elementary"
                    :value="courses.ONLINE.ELEMENTARY"
                    @click="selectCourse"
                  />
                  <label class="form-check-label" for="online_elementary"
                    >直播芳療認證課程入門班</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="online_intermediate"
                    :value="courses.ONLINE.INTERMEDIATE"
                    @click="selectCourse"
                  />
                  <label class="form-check-label" for="online_intermediate"
                    >直播芳療認證課程中階班</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    id="online_all"
                    :value="courses.ONLINE.ALL"
                    @click="selectCourse"
                  />
                  <label class="form-check-label" for="online_all">線上芳療認證課程全階班</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="form_box">
          <label for="inputContent" class="form_label">備註</label>
          <textarea
            id="inputContent"
            class="form_input"
            type="text"
            placeholder="請輸入您的訊息"
            style="height: 60px"
            v-model="courseSignUp.comment"
          />
        </div>
        <button type="submit" class="btn_outline brown">送出資料</button>
      </form>
    </section>
  </div>
</template>

<script>
import { COURSES, CourseSignUp } from "@/js/api";

export default {
  data: () => ({
    courses: COURSES,
    courseSignUp: new CourseSignUp(),
    error: "至少勾選一個課程",
  }),
  mounted() {
    this.$refs.course.setCustomValidity(this.error);
  },
  methods: {
    signUp(e) {
      e.preventDefault();

      this.$swal.fire({
        title: "送出中",
        allowEscapeKey: false,
        allowOutsideClick: false,
        onOpen: () => {
          this.$swal.showLoading();
        },
      });

      this.courseSignUp.signUp().then(() => {
        this.$swal.close();
        this.$swal
          .fire({
            title: "報名完成",
            icon: "success",
            timer: 2000,
            showConfirmButton: false,
          })
          .then(() => {
            this.$router.push({ path: "/" });
          });
      });
    },
    selectCourse(e) {
      const checkbox = e.target;
      if (checkbox.checked) {
        this.$refs.course.setCustomValidity("");
        this.courseSignUp.courses.push(checkbox.value);
      } else {
        const index = this.courseSignUp.courses.indexOf(checkbox.value);
        if (index !== -1) {
          this.courseSignUp.courses.splice(index, 1);
        }

        if (!this.courseSignUp.courses.length) {
          this.$refs.course.setCustomValidity(this.error);
        }
      }
    },
  },
};
</script>