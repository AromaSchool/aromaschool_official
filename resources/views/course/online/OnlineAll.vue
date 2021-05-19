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
      <p>芳療線上學習時代來臨！ 用最效率的方式學習，釋放內心的潛能。</p>
      <p>
        人生在不同階段都有不同發展與成長需求，學習不需要理由更不分年齡。喜愛精油的你是否曾經思考過，除了本業你還擁有什麼?現在就是你晉升專業芳療技能的最好時機，《禾場國際芳療學苑》線上芳療認證課程全階班，內容以美國NAHA芳療師協會研究多年的系統為架構，融會成立20年以來的教學經驗，編整出一套結構嚴謹，架構清晰的專業學習內容，課程包括：芳香療法概論、精油概論
        、芳療配方運用 、芳香相關理論
        、生理系統與芳療配方的案例分析、精油個論等。
      </p>
      <p>
        只有接受完整的訓練課程，才有機會見識芳療的全貌。線上芳療認證課程全階班在快速忙碌的現代生活中，可以利用零碎通勤時刻有效學習，讓專業學習隨時隨地掌握在手，是你與國際趨勢同步接軌的最佳學習方案！
      </p>
    </template>
    <template #schedule>
      <div class="table_container">
        <table class="course_table online_all" cellpadding="15">
          <thead>
            <tr>
              <th class="num">單元</th>
              <th class="subject">課程內容</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>芳香療法概論</td>
              <td>
                認識芳香療法<br />芳香療法的歷史<br />芳香療法的價值與研究
              </td>
            </tr>
            <tr>
              <td>精油概論</td>
              <td>
                精油基礎調製學 <br />精油品質辨識 <br />精油基本使用方式
                <br />精油萃取方式簡介 <br />精油藥理動力學 <br />精油毒性與禁忌
              </td>
            </tr>
            <tr>
              <td>芳療相關理論</td>
              <td>
                如何界定排毒、刺激或過敏反應 <br />植物科屬概論
                <br />精油基礎化學芳療 <br />調油處方與技巧注意事項
                <br />芳療諮詢概論
              </td>
            </tr>
            <tr>
              <td>芳療生理解剖學與芳療配方的個案分析</td>
              <td>
                免疫、淋巴、骨骼、肌肉、皮膚、神經、循環、泌尿、生殖、內分泌、呼吸、消化系統與芳香療法案例分析
                <br />邊緣系統、嗅覺密碼與芳香療法案例分析
              </td>
            </tr>
            <tr>
              <td>精油</td>
              <td>精油個論</td>
            </tr>
            <tr>
              <td>純露</td>
              <td>
                純露理論及應用，純露個論（羅馬洋甘菊純露、天竺葵純露、薰衣草純露、橙花純露、薄荷純露、玫瑰純露、迷迭香純露）
              </td>
            </tr>
            <tr>
              <td>基底油</td>
              <td>
                基底油理論及應用，基底油個論（甜杏仁油、金盞花油、荷荷芭油、澳洲胡桃油、玫瑰果油、聖約翰草油、葵花油）
              </td>
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
        <li>國際認證芳療講師線上授課‧保證上課高品質與一致性</li>
        <li>跟上時代的芳療學習趨勢‧不因距離疫情阻隔成長機會</li>
        <li>有效降低芳療學習成本‧無須舟車勞頓，無限重覆聆聽</li>
        <li>以輕鬆無壓力的方式學習芳療‧一人一進度，無須擔心缺課跟不上</li>
        <li>最自由無拘芳療學習途徑‧延伸學習時間地點，全天24小時均可學習</li>
      </ol>
    </template>
    <template #suitable>
      <ol>
        <li>有志提升芳療專業</li>
        <li>想取得以 NAHA 美國國家芳療協會芳療師認證</li>
        <li>欲將自身專業結合芳香療法專業，跨界綜合運用</li>
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
        <li>本課程費用 45,000 元，含課程費、講義及一套 50 支教學用精油</li>
        <li>本課程為「錄音檔」，需於規定時間內自行安排時間於線上上課</li>
        <li>課程共 200 小時（線上課程 60 小時 + 函授課程 140 小時）</li>
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
          本課程為網路線上課程，學員報名繳費完成後不得退費，亦不得轉換成其他課程或產品。
        </li>
        <li>
          本課程費用「不含」台灣地區台、澎、金、馬
          以外之運費，海外民眾若有興趣，歡迎與禾場洽詢。
        </li>
        <li>
          通過高階芳療師認證考試後可申請：
          <ul>
            <li>NAHA美國國家芳療協會 Level 2 專業芳療師 會員證書</li>
          </ul>
        </li>
        <li>
          學費不含以下費用，學員可按需要申請：
          <ul>
            <li>
              高階芳療師認證考試費 NTD.3600（含高階考試費 + 禾場高階芳療師證書）
            </li>
            <li>NAHA認證申請費 NTD.1500</li>
            <li>NAHA認證費 USD.125（由美國NAHA收取）</li>
          </ul>
        </li>
        <li>
          課程報名完成後，每位學員均配置輔導導師窗口協助學員，歡迎有任何問題迎學員於上班時間聯繫。（星期一至五
          9:00~18:00 ，國定例假日公休）
        </li>
        <li>
          線上認證課程「非」拿取國際認證保證班，報名課程後請學員自行安排時間聽課、閱讀、寫個案、考試、申請證書，請學員務必「主動」完成並定期聯絡學苑完成畢業標準，超過規定結業期限恕不授理且學員不得有異議。
        </li>
        <li>
          學員請先確認，在學期內有可與學苑聯絡之管道。本學苑聯絡管道不隨意變更或關閉，恕不接受「無法聯絡到學苑」為由要求延續學程。（聯絡管道：電話、E-mail、官方LINE、FB粉絲團）
        </li>
        <li>
          芳療專業非常注重分享交流、個案經驗、不斷的用油…，而芳香療法專業可能會因大環境、時間不同而有所更新，線上認證課程僅提供芳療理論內容，無法依時事立即更新最新資訊；若本身需求想要多方面廣大學習芳香療法，且地點與時間上可配合，建議參加學苑<router-link
            to="/course/aromatherapy/intermediate"
            title="面授課程"
            class="link"
            >面授課程</router-link
          >。本學苑僅提供線上認證課程之教材，無另外提供面授、補充教材，請先斟酌與評估。
        </li>
        <li>禾場芳療學苑保留所有課程調整與變動之權利。</li>
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
    title: "線上芳療認證課程全階班",
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
    onlineMode: "audio",
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