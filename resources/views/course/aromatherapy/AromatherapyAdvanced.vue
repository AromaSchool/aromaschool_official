<template>
  <CourseContent
    :title="title"
    :type="type"
    :registry="registry"
    :isShowSchedule="isShowSchedule"
    :isShowProcess="isShowProcess"
    :isShowFeature="isShowFeature"
    :isShowSuitable="isShowSuitable"
    :isShowTarget="isShowTarget"
    :isShowPayment="isShowPayment"
    :isShowMeasure="isShowMeasure"
    :isShowTaipei="!!data[0]"
    :isShowTaichung="!!data[1]"
    :isShowHsinchu="!!data[2]"
    :isShowTainan="!!data[3]"
    :isShowKaohsiung="!!data[4]"
  >
    <template #intro>
      <p>
        雖然，30幾個小時的訓練課程滿足了許多人對芳療的疑問！但對大自然的親近，許多人懷著更深的期待、甚至想將這樣的興趣結合在工作之中。
      </p>
      <p>
        學習芳香療法，每個人都有她獨特的動機，在國外，很多受過專業訓練的芳香療法執行師選擇讓它成為一種工作、一種服務，但也有許多人將它視為一種珍貴的特質。
      </p>
      <p>
        許多芳療師都有相同的經驗，當旁邊朋友們發現他們具有這樣的能力時，不約而同的，他們開始成為整個環境裡面情感上的維繫者，從付出關懷、提供大自然的療癒能力出發，她們開始更新與周遭家人朋友的關係，同時拓展了生活圈，與更多的人建立更深入的關係，許多人因此體會生命的真諦在於付出，甚至找尋生命屬性相同的伴侶。在從事芳香療法時，他們早已經獲得了超越想像的回報，芳療對這些人而言，成為一種改善環境、改變世界的療癒能力。
      </p>
      <p>無論您的動機為何，深入的學習是培養優秀療癒能力唯一的路。</p>
    </template>
    <template #schedule>
      <div class="table_container">
        <table class="course_table" cellpadding="15">
          <thead>
            <tr>
              <th class="num"></th>
              <th class="subject">課程內容</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>十大生理系統專論</td>
            </tr>
            <tr>
              <td>2</td>
              <td>精油化學</td>
            </tr>
            <tr>
              <td>3</td>
              <td>精油各論</td>
            </tr>
            <tr>
              <td>4</td>
              <td>植物油各論</td>
            </tr>
            <tr>
              <td>5</td>
              <td>純露各論</td>
            </tr>
            <tr>
              <td>6</td>
              <td>配方學</td>
            </tr>
            <tr>
              <td>7</td>
              <td>精油使用禁忌與毒性</td>
            </tr>
            <tr>
              <td>8</td>
              <td>香氣抓週</td>
            </tr>
            <tr>
              <td>9</td>
              <td>彈性課程</td>
            </tr>
          </tbody>
        </table>
      </div>
    </template>
    <template #process>
      <ul>
        <li>
          美國NAHA Level2 國際芳療師專業認證課程需完成：入門 + 中階 + 高階
        </li>
        <li>英國IFPA國際芳療師認證班需完成：入門 + 中階 + 高階 + 英式按摩</li>
      </ul>
    </template>
    <template #feature>
      <ol>
        <li>課程架構符合國際芳療師協會NAHA、IFPA認證標準</li>
        <li>教學生動融入DIY、體驗、回饋，講師教學深入淺出</li>
        <li>每班有學員人數上限，確保學習品質，並與老師皆能有所交流互動</li>
        <li>
          高階課程結業後可申請高階時數證書（禾場國際芳療學苑協助申請手續費NT$500)，為您打下未來投入芳療領域的專業基礎和條件。(全階認證課程畢業後可取得美國NAHA國際認證資格)
        </li>
      </ol>
    </template>
    <template #suitable>
      <ol>
        <li>美容、SPA相關產業從業人員、相關產業主管、業者</li>
        <li>
          有志取得以TWAA台灣芳療協會高階芳療師認證及NAHA美國國家芳療協會芳療師認證的相關專業人士
        </li>
      </ol>
    </template>
    <template #target>
      <ol>
        <li>取得NAHA美國國際整體芳香療法協會授權核發高階芳療師認證</li>
        <li>可申請加入NAHA美國國際整體芳香療法協會之專業芳療師會員</li>
        <li>具備正確、及紮實的芳療師技巧及觀念</li>
        <li>具備獨立研究、教學、開業能力</li>
      </ol>
    </template>
    <template #payment>
      <ul>
        <li>
          本課程費用 70,000 元 (舊生、現金9折)，含課程費、講義、耗材及一套 50
          支教學用精油
        </li>
        <li>課程共 180 小時（面授課程 120 小時 + 線上課程 60 小時）</li>
        <li>
          關於 二階(入+中)/三階(入+中+高)/四階(入+中+高+英式按摩)
          合報優惠及其他優惠活動，請加入<a
            href="https://goo.gl/Khc3co"
            title="官方LINE"
            target="_blank"
            rel="noopener noreferrer"
            class="link"
            ><i class="fab fa-line"></i>官方LINE</a
          >洽詢，或於上班時間來電
          <a href="tel:0227112290" title="02-27112290" class="link"
            ><i class="fas fa-phone-alt"></i>02-27112290</a
          >（星期一至五 9:00~18:00；公休日：國定例假日含連休）
        </li>
      </ul>
    </template>
    <template #periodTaipei>
      <div class="table_container">
        <table class="course_table" cellpadding="15">
          <thead>
            <tr>
              <th class="peroid">上課時段</th>
              <th class="time">上課時間</th>
              <th class="week">上課週數</th>
              <th class="date">各梯開課日期</th>
            </tr>
          </thead>
          <tbody>
            <template v-if="isComingSoon(data[0])">
              <tr>
                <td colspan="4" class="center">敬請期待</td>
              </tr>
            </template>
            <template v-else>
              <tr v-for="datum in data[0]" :key="`setting-${datum.id}`">
                <template v-if="datum.batches.length">
                  <td>{{ `${datum.schedule.name}班` }}</td>
                  <td>{{ `${datum.startTime}~${datum.endTime}` }}</td>
                  <td>{{ `含開課日，共${datum.weeks}週` }}</td>
                  <td>
                    <ul class="date_list">
                      <li
                        v-for="batch in datum.batches"
                        :key="`batch-${batch.id}`"
                      >
                        {{ batch.startDate }}
                      </li>
                    </ul>
                  </td>
                </template>
              </tr>
            </template>
          </tbody>
        </table>
      </div>
    </template>
    <template #periodTaichung>
      <div class="table_container">
        <table class="course_table" cellpadding="15">
          <thead>
            <tr>
              <th class="peroid">上課時段</th>
              <th class="time">上課時間</th>
              <th class="week">上課週數</th>
              <th class="date">各梯開課日期</th>
            </tr>
          </thead>
          <tbody>
            <template v-if="isComingSoon(data[1])">
              <tr>
                <td colspan="4" class="center">敬請期待</td>
              </tr>
            </template>
            <template v-else>
              <tr v-for="datum in data[1]" :key="`setting-${datum.id}`">
                <template v-if="datum.batches.length">
                  <td>{{ `${datum.schedule.name}班` }}</td>
                  <td>{{ `${datum.startTime}~${datum.endTime}` }}</td>
                  <td>{{ `含開課日，共${datum.weeks}週` }}</td>
                  <td>
                    <ul class="date_list">
                      <li
                        v-for="batch in datum.batches"
                        :key="`batch-${batch.id}`"
                      >
                        {{ batch.startDate }}
                      </li>
                    </ul>
                  </td>
                </template>
              </tr>
            </template>
          </tbody>
        </table>
      </div>
    </template>
    <template #periodHsinchu>
      <div class="table_container">
        <table class="course_table" cellpadding="15">
          <thead>
            <tr>
              <th class="peroid">上課時段</th>
              <th class="time">上課時間</th>
              <th class="week">上課週數</th>
              <th class="date">各梯開課日期</th>
            </tr>
          </thead>
          <tbody>
            <template v-if="isComingSoon(data[2])">
              <tr>
                <td colspan="4" class="center">敬請期待</td>
              </tr>
            </template>
            <template v-else>
              <tr v-for="datum in data[2]" :key="`setting-${datum.id}`">
                <template v-if="datum.batches.length">
                  <td>{{ `${datum.schedule.name}班` }}</td>
                  <td>{{ `${datum.startTime}~${datum.endTime}` }}</td>
                  <td>{{ `含開課日，共${datum.weeks}週` }}</td>
                  <td>
                    <ul class="date_list">
                      <li
                        v-for="batch in datum.batches"
                        :key="`batch-${batch.id}`"
                      >
                        {{ batch.startDate }}
                      </li>
                    </ul>
                  </td>
                </template>
              </tr>
            </template>
          </tbody>
        </table>
      </div>
    </template>
    <template #periodTainan>
      <div class="table_container">
        <table class="course_table" cellpadding="15">
          <thead>
            <tr>
              <th class="peroid">上課時段</th>
              <th class="time">上課時間</th>
              <th class="week">上課週數</th>
              <th class="date">各梯開課日期</th>
            </tr>
          </thead>
          <tbody>
            <template v-if="isComingSoon(data[3])">
              <tr>
                <td colspan="4" class="center">敬請期待</td>
              </tr>
            </template>
            <template v-else>
              <tr v-for="datum in data[3]" :key="`setting-${datum.id}`">
                <template v-if="datum.batches.length">
                  <td>{{ `${datum.schedule.name}班` }}</td>
                  <td>{{ `${datum.startTime}~${datum.endTime}` }}</td>
                  <td>{{ `含開課日，共${datum.weeks}週` }}</td>
                  <td>
                    <ul class="date_list">
                      <li
                        v-for="batch in datum.batches"
                        :key="`batch-${batch.id}`"
                      >
                        {{ batch.startDate }}
                      </li>
                    </ul>
                  </td>
                </template>
              </tr>
            </template>
          </tbody>
        </table>
      </div>
    </template>
    <template #periodKaohsiung>
      <div class="table_container">
        <table class="course_table" cellpadding="15">
          <thead>
            <tr>
              <th class="peroid">上課時段</th>
              <th class="time">上課時間</th>
              <th class="week">上課週數</th>
              <th class="date">各梯開課日期</th>
            </tr>
          </thead>
          <tbody>
            <template v-if="isComingSoon(data[4])">
              <tr>
                <td colspan="4" class="center">敬請期待</td>
              </tr>
            </template>
            <template v-else>
              <tr v-for="datum in data[4]" :key="`setting-${datum.id}`">
                <template v-if="datum.batches.length">
                  <td>{{ `${datum.schedule.name}班` }}</td>
                  <td>{{ `${datum.startTime}~${datum.endTime}` }}</td>
                  <td>{{ `含開課日，共${datum.weeks}週` }}</td>
                  <td>
                    <ul class="date_list">
                      <li
                        v-for="batch in datum.batches"
                        :key="`batch-${batch.id}`"
                      >
                        {{ batch.startDate }}
                      </li>
                    </ul>
                  </td>
                </template>
              </tr>
            </template>
          </tbody>
        </table>
      </div>
    </template>
  </CourseContent>
</template>

<script>
import CourseContent from "@/views/course/CourseContent.vue";
import { CourseBatch, CLASSROOMS } from "@/js/api";

export default {
  components: {
    CourseContent,
  },
  data: () => ({
    title: "芳香療法認證課程高階班",
    type: "芳療學苑",
    registry:
      "https://docs.google.com/forms/d/e/1FAIpQLScHsPTgQB8FJpI0lEdkEFcq6YllanI5eDnOPS1m_AbDziNxsQ/viewform",
    isShowSchedule: true,
    isShowProcess: true,
    isShowFeature: true,
    isShowSuitable: true,
    isShowTarget: true,
    isShowPayment: true,
    isShowMeasure: true,
    data: [],
  }),
  created() {
    this.getCourseBatches();
  },
  methods: {
    getCourseBatches() {
      for (const [_, classroomId] of Object.entries(CLASSROOMS)) {
        CourseBatch.getList({
          courseId: this.$route.meta.courseId,
          classroomId: classroomId,
        }).then((response) => {
          this.$set(this.data, classroomId - 1, response);
        });
      }
    },
    isComingSoon(data) {
      for (const datum of data) {
        if (datum.batches.length) {
          return false;
        }
      }
      return true;
    },
  },
};
</script>