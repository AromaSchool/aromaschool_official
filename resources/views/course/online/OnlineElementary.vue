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
    :isShowPrecaution="isShowPrecaution"
    :isShowMeasure="isShowMeasure"
    :isShowTaipei="!!data[0]"
    :isShowTaichung="!!data[1]"
    :isShowHsinchu="!!data[2]"
    :isShowTainan="!!data[3]"
    :isShowKaohsiung="!!data[4]"
    :isShowOnline="isShowOnline"
  >
    <template #intro>
      <p>
        學苑有直播錄影課程囉！不用擔心群聚壓力，不必舟車勞頓，讓你在家也能學習到專業的芳香療法課程！
      </p>
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
                純露介紹：兩種不同產地的保加利亞玫瑰純露、薰衣草純露
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
      <div class="trial_box">
        <h6>※特色介紹及課程試聽</h6>
        <audio src="/media/course_online_trial.mp3" controls></audio>
      </div>
      <ol>
        <li>在學期間不限次數重複上課，不怕缺課，不用擔心補課</li>
        <li>不需配合別人的進度，自己安排進度！</li>
        <li>
          只要有網路與手機、平版或電腦就能隨時上課，不需受限於開課地點，節省交通時間
        </li>
        <li>可以有效利用空餘時間，提升專業能力，取得專業認證</li>
        <li>
          芳療認證資歷最豐富，2003年成立至今，歷經欲20年的萃鍊，課程最專業
        </li>
        <li>專屬導師諮詢，有問題於短時間內回覆協助指導</li>
        <li>費用最優惠，為面授課程的6折</li>
        <li>避免群聚感染壓力</li>
        <li>隱私、隱密性高 、不需在意別人的眼光</li>
        <li>課程架構符合國際芳療師協會NAHA、IFPA認證標準</li>
        <li>教學生動融入DIY、體驗、回饋，講師教學深入淺出</li>
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
        <li>無法配合面授課上課時間者</li>
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
        <li>
          本課程費用優惠價 5,000 元，含課程費、講義、耗材（郵寄附贈全套價值
          2,500 個人專屬教材）
        </li>
        <li>
          本課程為面授課程之「錄影影片」，需於規定時間內自行安排時間於線上上課
        </li>
        <li>課程共 12 小時</li>
        <li>
          教材含：上課講義、10ml 護髮霜*1、20ml 葵花油*2、2ml 精油10支
          (檸檬、甜橙、歐薄荷、桉油醇迷迭香、純正薰衣草、澳洲尤加利、茶樹、花梨木、綠花白千層、大西洋雪松)、20ml
          純露、10ml 複方滾珠按摩油1支、專業聞香紙 40張
        </li>
      </ul>
    </template>
    <template #periodOnline>
      <div class="table_container">
        <table class="course_table" cellpadding="15">
          <thead>
            <tr>
              <th class="date">開課日期</th>
              <th class="date">結束日期</th>
              <th class="date">報名截止日期</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="datum in data[4]" :key="`setting-${datum.id}`">
              <template v-if="datum.batches.length">
                <td>{{ `${datum.schedule.name}班` }}</td>
                <td>{{ `${datum.startTime}~${datum.endTime}` }}</td>
                <td>{{ `含開課日，共${datum.weeks}週` }}</td>
              </template>
              <template v-else>
                <td colspan="3" class="center">敬請期待</td>
              </template>
            </tr>
          </tbody>
        </table>
      </div>
    </template>
    <template #precaution>
      <ol>
        <li>
          網路課程以「Facebook」平台為主，行政人員於學員完成繳費後引導學員進入網路直播教室。
        </li>
        <li>
          直播錄影課程效果受限於學員所處環境的網路品質，無法保證影片流暢，直播感受跟現場會有一定落差，此部分請自行斟酌。
        </li>
        <li>
          建議連接家中wifi訊號可確保課程收視品質，僅使用3G、4G等訊號將導致訊號不穩、網路擁擠而影響上課品質。
        </li>
        <li>
          若您曾經順利收看FB臉書上相關直播節目，則表示您所處環境的頻寬沒有問題，可放心上課。
        </li>
        <li>
          網路課程為面授課程之「錄影影片」，需自行安排於規定時間內完成課程。
        </li>
        <li>
          開課後請於14天內安排時間將課程觀看完畢，課程結束後即關閉觀看權限。若需延長觀看期限，需另付學分費及設定費。
        </li>
        <li>上完入門課程後，方可參加中階課程，無法跳階。</li>
        <li>
          直播錄影課程開始後，因個人因素無法觀看，恕無法退費、無法轉面授課程（學苑設備技術性問題除外）。
        </li>
        <li>收到上課教材後無法退貨退費、無補課機制。</li>
        <li>
          若想廣大學習芳香療法、個案分享、經驗交流，歡迎報名
          <router-link
            to="/course/aromatherapy/elementary"
            title="面授課程"
            class="link"
            >➤面授課程</router-link
          >。
        </li>
      </ol>
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
    title: "直播芳療認證課程入門班",
    type: "網路學苑",
    registry:
      "https://docs.google.com/forms/d/e/1FAIpQLSdUsNUiMIZ1IW2T_49Uy64Q-cOS2yXK3SjZGHRYnXLgQ3WXUg/viewform",
    isShowSchedule: true,
    isShowProcess: true,
    isShowFeature: true,
    isShowSuitable: true,
    isShowTarget: true,
    isShowPayment: true,
    isShowOnline: true,
    isShowPrecaution: true,
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
          this.data.push(response);
        });
      }
    },
  },
};
</script>