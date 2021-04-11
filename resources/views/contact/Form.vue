<template>
  <section class="contact_form">
    <p class="hint">
      請留下您寶貴的意見，我們的服務人員會火速回應您的要求。
      <span>(*)為必填項目</span>
    </p>
    <form class="contact_form_block" @submit="send">
      <div class="form_box">
        <label for="inputName" class="form_label">姓名<span class="hint">*</span></label>
        <input
          id="inputName"
          class="form_input"
          type="text"
          placeholder="請輸入您的姓名"
          v-model="formData.name"
          :required="required"
        />
      </div>
      <div class="form_box">
        <label for="inputCompany" class="form_label">公司/單位</label>
        <input
          id="inputCompany"
          class="form_input"
          type="text"
          placeholder="請輸入您的公司/單位"
          v-model="formData.department"
        />
      </div>
      <div class="form_box">
        <label for="inputPhone" class="form_label">聯絡電話<span class="hint">*</span></label>
        <input
          id="inputPhone"
          class="form_input"
          type="text"
          placeholder="請輸入您的聯絡電話"
          :required="required"
          pattern="^(09)\d{8}$"
          v-model="formData.phone"
        />
      </div>
      <div class="form_box">
        <label for="inputMail" class="form_label">電子郵件<span class="hint">*</span></label>
        <input
          id="inputMail"
          class="form_input"
          type="email"
          placeholder="請輸入您的E-mail"
          :required="required"
          pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
          v-model="formData.mail"
        />
      </div>
      <div class="form_box">
        <label for="inputTopic" class="form_label">信件主旨<span class="hint">*</span></label>
        <input
          id="inputTopic"
          class="form_input"
          type="text"
          placeholder="請輸入您的信件主旨"
          :required="required"
          v-model="formData.title"
        />
      </div>
      <div class="form_box">
        <label for="inputContent" class="form_label">內容<span class="hint">*</span></label>
        <textarea
          id="inputContent"
          class="form_input"
          type="text"
          placeholder="請輸入您的訊息"
          :required="required"
          style="height: 140px"
          v-model="formData.content"
        />
      </div>
      <button type="submit" class="btn_outline brown">送出表單</button>
    </form>
  </section>
</template>

<script>
import { Email } from "@/js/api";

export default {
  data: () => ({
    required: true,
    formData: {},
  }),
  methods: {
    send(e) {
      e.preventDefault();
      this.$swal.fire({
        title: "送出中",
        allowEscapeKey: false,
        allowOutsideClick: false,
        onOpen: () => {
          this.$swal.showLoading();
        },
      });
      Email.send(
        this.formData.title,
        this.formData.content,
        this.formData.name,
        this.formData.phone,
        this.formData.department,
        this.formData.mail
      )
        .then(() => {
          this.$swal.close();
          this.$swal
            .fire({
              title: "成功",
              icon: "success",
              timer: 2000,
              showConfirmButton: false,
            })
            .then(() => {
              this.formData = {};
            });
        })
        .catch(() => {
          this.$swal.close();
          this.$swal.fire({
            title: "發生錯誤",
            icon: "error",
            timer: 2000,
            showConfirmButton: false,
          });
        });
    },
  },
};
</script>