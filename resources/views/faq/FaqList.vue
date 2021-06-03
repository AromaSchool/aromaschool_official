<template>
  <section class="faq_list">
    <div class="accordion" id="faq_list">
      <template v-if="data.length">
        <div class="accordion-item">
          <h2 class="accordion-header" :id="`heading_${data[0].id}`">
            <button
              class="accordion-button"
              type="button"
              data-bs-toggle="collapse"
              :data-bs-target="`#question_${data[0].id}`"
              aria-expanded="true"
              :aria-controls="`question_${data[0].id}`"
            >
              {{ data[0].question }}
            </button>
          </h2>
          <div
            :id="`question_${data[0].id}`"
            class="accordion-collapse collapse show"
            :aria-labelledby="`heading_${data[0].id}`"
            data-bs-parent="#faq_list"
          >
            <div class="accordion-body">
              {{ data[0].answer }}
            </div>
          </div>
        </div>
        <div class="accordion-item" v-for="datum in data.slice(1)" :key="datum.id">
          <h2 class="accordion-header" :id="`heading_${datum.id}`">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              :data-bs-target="`#question_${datum.id}`"
              aria-expanded="true"
              :aria-controls="`question_${datum.id}`"
            >
              {{ datum.question }}
            </button>
          </h2>
          <div
            :id="`question_${datum.id}`"
            class="accordion-collapse collapse"
            :aria-labelledby="`heading_${datum.id}`"
            data-bs-parent="#faq_list"
          >
            <div class="accordion-body" v-html="datum.answer"></div>
          </div>
        </div>
      </template>
      <div class="text-center" v-else>
        <p>暫無資料</p>
      </div>
    </div>
  </section>
</template>

<script>
import { Question } from "@/js/api";

export default {
  data: () => ({
    data: [],
  }),
  created() {
    this.getQuestions();
  },
  methods: {
    getQuestions() {
      Question.getList(this.$route.params.id)
        .then((response) => {
          this.data = response;
        })
        .catch(() => {
          this.$router.push({ path: "/404" });
        });
    },
  },
};
</script>