<template>
  <section class="faq_list">
    <div class="accordion" id="faq_list">
      <div class="accordion-item" v-for="faq in faqs" :key="faq.id">
        <h2 class="accordion-header" :id="`heading_${faq.id}`">
          <button
            class="accordion-button"
            :class="{ collapsed: faq.isCollapse }"
            type="button"
            data-bs-toggle="collapse"
            :data-bs-target="`#question_${faq.id}`"
            aria-expanded="true"
            :aria-controls="`question_${faq.id}`"
          >
            {{ faq.question }}
          </button>
        </h2>
        <div
          :id="`question_${faq.id}`"
          class="accordion-collapse collapse"
          :class="{ show: faq.isShow }"
          :aria-labelledby="`heading_${faq.id}`"
          data-bs-parent="#faq_list"
        >
          <div class="accordion-body">
            {{ faq.answer }}
          </div>
        </div>
      </div>
      <!-- <div class="accordion-item">
        <h2 class="accordion-header" id="heading_2">
          <button
            class="accordion-button collapsed"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#question_2"
            aria-expanded="false"
            aria-controls="question_2"
          >
            如果報名後因為時間關係臨時無法上課怎麼辦？
          </button>
        </h2>
        <div
          id="question_2"
          class="accordion-collapse collapse"
          aria-labelledby="heading_2"
          data-bs-parent="#faq_list"
        >
          <div class="accordion-body">
            針對這個問題，因為禾場課程開班固定，因此建議您可以安排至其它梯次上課，以更動一次為主。
          </div>
        </div>
      </div> -->
    </div>
  </section>
</template>

<script>
export default {
  data: () => ({
    faqs: [
      {
        id: 1,
        question: "請問上課要準備哪些東西？有休息時間嗎？課程異動我要如何得知？",
        answer:
          "上課時學員只需準備筆記本與筆（若不習慣小紙杯，建議您，有許多學員自備大茶杯放於學苑）。上課日的中午學員會有一個半小時的午休時間，提供學員休息、交誼的機會。若有課程臨時更動，禾場會提早2天前主動以line、email、簡訊或電話告知。",
        isShow: true,
        isCollapse: false,
      },
      {
        id: 2,
        question: "如果報名後因為時間關係臨時無法上課怎麼辦？",
        answer:
          "針對這個問題，因為禾場課程開班固定，因此建議您可以安排至其它梯次上課，以更動一次為主。",
        isShow: false,
        isCollapse: true,
      },
      {
        id: 3,
        question: "我已經有許多精油、基底油，是否可將貴學苑所贈送的精油抵作學費折扣呢？",
        answer:
          "學苑設計贈送教學用精油的這個機制，主要目的是提供學員一個學習的基準，並鼓勵學員盡量使用精油，累積實務經驗。對一個芳療人來說，多多使用精油，熟悉優良精油的品質標準，才是提升自己專業能力的不二法門。因此這是學習的一個機制設計，非單純贈品，所以無法抵扣學費。",
        isShow: false,
        isCollapse: true,
      },
      {
        id: 4,
        question: "禾場的畢業評量、考試設計如何？需要費用嗎？若沒有考過怎麼辦？",
        answer:
          "禾場認為，考試並不一定是優良芳療師的唯一評鑑標準，還有許多更重要的事情。禾場的評鑑著重在個案報告、作業、以及平時考試，期末考試評鑑只是其中一環！ 禾場芳療師期末考考試無須再付費。若考試沒通過，需再補考並酌收手續費3000元。",
        isShow: false,
        isCollapse: true,
      },
      {
        id: 5,
        question: "報名禾場認證課程需要符合什麼條件嗎？",
        answer:
          "初階芳療師的認證課程並無對象限制，凡對芳療有興趣者皆可報名參加喔。但..毅力、恆心仍是邁向傑出的不二法門！ 禾場芳療師期末考考試無須再付費。若考試沒通過，需再補考並酌收手續費3000元。",
        isShow: false,
        isCollapse: true,
      },
    ],
  }),
};
</script>