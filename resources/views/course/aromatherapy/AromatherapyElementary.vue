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
      <q>
        <br />
        <p>
          <b
            >芳療人生不能停，在家也可安心上課！<br />
            禾場20年來最大優惠課程放送！</b
          >
        </p>
        <p>
          三級防疫期間只要報名禾場課程，<br />
          就能即刻加入禾場Meet芳療視訊教室，免費無限重複上課。
        </p>
        <p>入門班每月36小時 / 中階班每月36小時 / 高階班每月開課皆可參加</p>
        <p>
          時數加碼送，有史以來北中南10位師資群首次同步開課，學員可以上到最多不同專長老師的課程！<br />
          學習時間不受空間影響，隨時想聽就聽，只有在禾場Meet芳療視訊教室！<br />
          心動不如馬上行動，越早報名賺越多！
        </p>
      </q>
      <p>
        市面上的精油品牌、芳療師頭銜琳瑯滿目已經是一股熱潮，但為什麼常常在專櫃詢問，卻得不到自己要的答案？為什麼我感覺不到精油的神奇療效？精油是大自然生命力的精華如何才能運用在自己身上？
      </p>
      <p>
        無論你是精油新手，或是接觸精油好一陣子的朋友，學習芳療的第一步至關重要，選擇適合您的課程以及正確的教學機構，將決定您是否能夠成為一個優秀的芳療師。
      </p>
      <p>
        禾場建議您先從「 芳香療法基礎入門班
        」開始，這是專門為從未上過認證課程的愛好者所設計的入門課程；課程的設計目的，在於芳療觀念的釐清與建立，透過國外芳療協會研究多年的系統架構學習芳療，禾場並獨創設計大量的實際操作、個案研討，強調將芳療融入生活才能夠有俯拾皆是的調配能力。
      </p>
    </template>
    <template #schedule>
      <div class="table_container">
        <table class="course_table" cellpadding="15">
          <thead>
            <tr>
              <th class="num"></th>
              <th class="subject">課程內容</th>
              <th class="system">生理檔案</th>
              <th class="activity">課程活動</th>
              <th class="handmade">DIY內容</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>
                認識芳香療法<br />
                芳香引領~認識精油<br />
                精油基礎調製學
              </td>
              <td></td>
              <td>
                香氛心理測驗<br />
                滾珠瓶體驗 <br />
                聞香測試
              </td>
              <td></td>
            </tr>
            <tr>
              <td>2</td>
              <td>
                精油概論<br />
                精油品質辨識<br />
                精油基本使用方法
              </td>
              <td>免疫系統</td>
              <td>
                嗅覺大考驗<br />
                課程目標調油<br />
                聞香測試
              </td>
              <td>按摩油</td>
            </tr>
            <tr>
              <td>3</td>
              <td>
                精油萃取方式簡介<br />
                生命之水-純露<br />
                純露介紹：羅馬洋甘菊、橙花
              </td>
              <td>邊緣系統</td>
              <td>
                香氣抓周<br />
                課程目標調油<br />
                聞香測試
              </td>
              <td>
                按摩油<br />
                髮霜
              </td>
            </tr>
            <tr>
              <td>4</td>
              <td>
                精油毒性與禁忌<br />
                精油藥理動力<br />
                嗅覺密碼<br />
                純露介紹：保加利亞玫瑰純露、薰衣草純露
              </td>
              <td>神經系統</td>
              <td>聞香測試</td>
              <td></td>
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
          入門課程結業後可申請入門時數證書（禾場國際芳療學苑協助申請手續費NT$500)，為您打下未來投入芳療領域的專業基礎和條件。(全階認證課程畢業後可取得申請美國NAHA國際認證資格)
        </li>
      </ol>
    </template>
    <template #suitable>
      <ol>
        <li>美容、SPA相關產業從業人員、相關產業主管、業者</li>
        <li>希望取得國際芳療師認證的芳療師</li>
        <li>醫護人員</li>
        <li>諮商心理師、臨床心理師</li>
        <li>想要參加正式芳療訓練精油玩家</li>
      </ol>
    </template>
    <template #target>
      <ol>
        <li>取得NAHA美國整體芳香療法協會核可之芳療師入門證書</li>
        <li>取得中階芳療師入學資格</li>
        <li>具備正確、及紮實的芳療師技巧及觀念</li>
        <li>培養芳療師獨具的敏銳觀察能力、針對他人之身心狀況解讀能力</li>
        <li>使原本美容從業人員得以切入自然療法及整體健康治療領域</li>
      </ol>
    </template>
    <template #payment>
      <ul>
        <li>本課程費用優惠價 4,200 元，含課程費、講義、耗材</li>
        <li>課程共 12 小時</li>
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
    title: "芳療認證入門班 | 防疫優惠版",
    type: "芳療學苑",
    registry: "/course/signup",
    isShowSchedule: true,
    isShowProcess: true,
    isShowFeature: true,
    isShowSuitable: true,
    isShowTarget: true,
    isShowPayment: true,
    isShowMeasure: true,
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