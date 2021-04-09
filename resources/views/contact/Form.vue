<template>
  <section class="contact_form">
    <p class="hint">
      請留下您寶貴的意見，我們的服務人員會火速回應您的要求。
      <span>(*)為必填項目</span>
    </p>
    <form action="" class="contact_form_block">
      <div class="form_box">
        <label for="inputName" class="form_label"
          >姓名<span class="hint">*</span></label
        >
        <input
          id="inputName"
          class="form_input"
          type="text"
          placeholder="請輸入您的姓名"
          required="required"
        />
      </div>
      <div class="form_box">
        <label for="inputCompany" class="form_label">公司/單位</label>
        <input
          id="inputCompany"
          class="form_input"
          type="text"
          placeholder="請輸入您的公司/單位"
        />
      </div>
      <div class="form_box">
        <label for="inputPhone" class="form_label"
          >聯絡電話<span class="hint">*</span></label
        >
        <input
          id="inputPhone"
          class="form_input"
          type="text"
          placeholder="請輸入您的聯絡電話"
          required="required"
        />
      </div>
      <div class="form_box">
        <label for="inputMail" class="form_label"
          >電子郵件<span class="hint">*</span></label
        >
        <input
          id="inputMail"
          class="form_input"
          type="email"
          placeholder="請輸入您的E-mail"
          required="required"
        />
      </div>
      <div class="form_box">
        <label for="inputTopic" class="form_label"
          >信件主旨<span class="hint">*</span></label
        >
        <input
          id="inputTopic"
          class="form_input"
          type="text"
          placeholder="請輸入您的信件主旨"
          required="required"
        />
      </div>
      <div class="form_box">
        <label for="inputContent" class="form_label"
          >內容<span class="hint">*</span></label
        >
        <textarea
          id="inputContent"
          class="form_input"
          type="text"
          placeholder="請輸入您的訊息"
          required="required"
          style="height: 140px"
        />
      </div>
      <button type="submit" class="btn_outline brown">送出表單</button>
    </form>
  </section>
</template>