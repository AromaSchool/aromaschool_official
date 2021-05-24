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
      <p>《禾場國際芳療學苑》有錄影直播課程囉！不必舟車勞頓，在家也能學習專業芳香療法課程！</p>
      <p>
        疫情影響喚醒大家對身心靈照護的重視，越來越多人懂得用精油來維持健康。但市面上的精油品牌琳瑯滿目，卻不知道該如何選擇？為什麼買了精油卻感覺不到它神奇療效？要如何運用精油能量在自己和家人身上？想要認識芳香療法卻苦無時間學習？
      </p>
      <p>如果你有以上煩惱，《禾場國際芳療學苑》錄影直播課程就是你最好的選擇！</p>
      <p>
        「芳香療法基礎入門班」是專門為初次接觸芳療的精油愛好者所設計的課程，目的在於建立芳療的基本觀念及日常使用方法，課程內容以美國NAHA及英國IFPA芳療師協會研究多年的系統來架構，《禾場國際芳療學苑》更獨創大量的實作及個案研討，將芳療融入生活才能夠發揮精油療癒身心的本質，錄影直播課程讓零碎的通勤時刻，變身你專屬的芳療進修時間。
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
        <li>美國NAHA Level2 國際芳療師專業認證課程需完成：入門 + 中階 + 高階</li>
        <li>英國IFPA國際芳療師認證班需完成：入門 + 中階 + 高階 + 英式按摩</li>
      </ul>
    </template>
    <template #feature>
      <ol>
        <li>直播錄影授課‧保證上課高品質與一致性</li>
        <li>跟上時代的芳療學習趨勢‧不因距離疫情阻隔成長機會</li>
        <li>有效降低芳療學習成本‧無須舟車勞頓，無限重覆聆聽</li>
        <li>以輕鬆無壓力的方式學習芳療‧一人一進度，無須擔心缺課跟不上</li>
        <li>最自由無拘芳療學習途徑‧延伸學習時間地點，全天24小時均可學習</li>
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
        <li>本課程費用 5,000 元，含課程費、講義、耗材 ( 郵寄附贈個人專屬教材 )</li>
        <li>於三級防疫期間至5/28前，報名可享有優惠價 4,200 元</li>
        <li>本課程為面授課程之「錄影影片」，需於規定時間內自行安排時間於線上上課</li>
        <li>課程共 12 小時</li>
        <li>
          教材含：上課講義、10ml 護髮霜*1、20ml 好捧油*2、2ml 精油*6
          (檸檬、甜橙、桉油醇迷迭香、純正薰衣草、茶樹、綠花白千層)、20ml 純露*4
          (玫瑰Miller、羅馬洋甘菊、薰衣草、橙花)、10ml 複方滾珠按摩油1支、專業聞香紙40張
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
        <li>網路課程以「Facebook」平台為主，行政人員於學員完成繳費後引導學員進入網路直播教室。</li>
        <li>
          直播錄影課程效果受限於學員所處環境的網路品質，無法保證影片流暢，直播感受跟現場會有一定落差，此部分請自行斟酌。
        </li>
        <li>
          建議連接家中wifi訊號可確保課程收視品質，僅使用3G、4G等訊號將導致訊號不穩、網路擁擠而影響上課品質。
        </li>
        <li>若您曾經順利收看FB臉書上相關直播節目，則表示您所處環境的頻寬沒有問題，可放心上課。</li>
        <li>網路課程為面授課程之「錄影影片」，需自行安排於規定時間內完成課程。</li>
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
          <router-link to="/course/aromatherapy/elementary" title="面授課程" class="link"
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
    title: "直播芳療認證課程入門班",
    type: "網路學苑",
    registry: "/course/signup",
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