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
    :isShowOnline="!!data"
    :onlineMode="onlineMode"
  >
    <template #intro>
      <p>
        學苑有直播錄影課程囉！不用擔心群聚壓力，不必舟車勞頓，讓你在家也能學習到專業的芳香療法課程！
      </p>
      <p>
        完成了芳香療法入門班之後的下一步，就是芳香療法認證系列課程的芳香療法中階班！在入門班一步一腳印地學習精油、純露、植物油等知識後，想要成為一位能夠幫助個案的芳療師，還需要更進一步的準備！
      </p>
      <p>
        中階課程之中，延續美國NAHA及英國IFPA芳療師協會的精神，及芳療入門課程的基礎，透過分析植物的解剖構造，我們在芳香療法中階班更進一步瞭解植物藥理及人體機轉，調香學豐富的氣味觸動，香氣抓周的信息導引，有助於了解自己的特質，並能給予個案客觀的分析，透過植物觀察宇宙和諧運作的脈理，以香氣開發全身的感官，是一場您絕對不可以錯過的香氣之旅。
      </p>
      <p>
        我們將帶領學員更廣泛的將芳香療法使用在實際生活之中。透過實際操作與回饋分享，讓你漸漸成為一位日常生活中的精油生活家，讓精油不再只是香氣而已，而是實際可以幫助個案的治療工具。
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
                芳香療法的價值與研究<br />
                觸覺符碼<br />
                按摩流派介紹
              </td>
              <td>肌肉系統</td>
              <td>
                手部按摩<br />
                聞香測試
              </td>
              <td>水凝乳液</td>
            </tr>
            <tr>
              <td>2</td>
              <td>如何界定排毒、刺激或過品反應 植物油概論</td>
              <td>循環系統</td>
              <td>
                課程目標調油<br />
                聞香測試
              </td>
              <td>基底油乳液</td>
            </tr>
            <tr>
              <td>3</td>
              <td>調香概論</td>
              <td>呼吸系統</td>
              <td>聞香測試</td>
              <td></td>
            </tr>
            <tr>
              <td>4</td>
              <td>
                純露概論<br />
                芳香美人
              </td>
              <td>皮膚系統</td>
              <td>
                課程目標調油<br />
                聞香測試
              </td>
              <td>精華液</td>
            </tr>
            <tr>
              <td>5</td>
              <td>植物科屬概論</td>
              <td>淋巴系統</td>
              <td>
                乾刷法<br />
                課程目標調油<br />
                聞香測試
              </td>
              <td>按摩油</td>
            </tr>
            <tr>
              <td>6</td>
              <td>芳療諮詢概論</td>
              <td>消化系統</td>
              <td>
                芳療諮詢練習<br />
                課程目標調油<br />
                聞香測試
              </td>
              <td>按摩油</td>
            </tr>
            <tr>
              <td>7</td>
              <td>
                精油化學簡介<br />
                藥用植物成分對人體功效
              </td>
              <td>生殖系統</td>
              <td>
                調香比賽投票<br />
                聞香測試
              </td>
              <td></td>
            </tr>
            <tr>
              <td>8</td>
              <td>
                植物的秘密生命<br />
                香氣抓周大解密
              </td>
              <td></td>
              <td>
                聞香測試<br />
                調香比賽頒獎
              </td>
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
          中階課程結業後可申請中階時數證書（禾場國際芳療學苑協助申請手續費NT$500)，為您打下未來投入芳療領域的專業基礎和條件。(全階認證課程畢業後可取得美國NAHA國際認證資格)
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
        <li>想要更進一步擁有正確芳療知識的一般民眾</li>
        <li>無法配合面授課上課時間者</li>
      </ol>
    </template>
    <template #target>
      <ol>
        <li>取得NAHA美國整體芳香療法協會核可之芳療師認證</li>
        <li>成為善用精油解決身心靈問題的專家</li>
        <li>取得高階芳療師入學資格</li>
        <li>具備正確、及紮實的芳療師技巧及觀念</li>
        <li>培養芳療師獨具的敏銳觀察能力、針對他人之身心狀況解讀能力</li>
        <li>讓自身成為精油生活家，在生活中能靈活運用</li>
      </ol>
    </template>
    <template #payment>
      <ul>
        <li>
          本課程費用優惠價 8,000 元，含課程費、講義、耗材（郵寄附贈全套價值
          3,500 個人專屬教材）
        </li>
        <li>
          本課程為面授課程之「錄影影片」，需於規定時間內自行安排時間於線上上課
        </li>
        <li>課程共 24 小時</li>
        <li>
          教材含：上課講義、10ml 無香油膠*1、10ml 無香精華液*1、10ml
          無香乳液*1、20ml 葵花油*2、20ml 純露、20ml
          基底油7支(甜杏仁油、金盞花油、荷荷巴油、澳洲胡桃油、橄欖油、聖約翰草油、葵花油)、專業聞香紙
          60張
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
            <template v-if="data.length">
              <tr v-for="datum in data" :key="`batch-${datum.id}`">
                <td>{{ datum.startDate }}</td>
                <td>{{ datum.endDate }}</td>
                <td>{{ datum.deadline }}</td>
              </tr>
            </template>
            <tr v-else>
              <td colspan="3" class="center">敬請期待</td>
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
          開課後請於四周內安排時間將課程觀看完畢，課程結束後即關閉觀看權限。若需延長觀看期限，需另付學分費及設定費。
        </li>
        <li>上完入門課程後，方可參加中階課程，無法跳階。</li>
        <li>
          直播錄影課程開始後，因個人因素無法觀看，恕無法退費、無法轉面授課程（學苑設備技術性問題除外）。
        </li>
        <li>收到上課教材後無法退貨退費、無補課機制。</li>
        <li>
          若想廣大學習芳香療法、個案分享、經驗交流，歡迎報名
          <router-link
            to="/course/aromatherapy/intermediate"
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
import { CourseBatch } from "@/js/api";

export default {
  components: {
    CourseContent,
  },
  data: () => ({
    title: "直播芳療認證課程中階班",
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
    onlineMode: "vedio",
    data: [],
  }),
  created() {
    this.getCourseBatches();
  },
  methods: {
    getCourseBatches() {
      CourseBatch.getList({
        courseId: this.$route.meta.courseId,
      }).then((response) => {
        if (response) {
          this.data.push(...response);
        }
      });
    },
  },
};
</script>