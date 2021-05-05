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
    :onlineMode="onlineMode"
  >
    <template #intro> </template>
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
        <li>全階認證課程畢業後可取得美國NAHA國際認證資格</li>
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
        <li>課程共 180 小時（線上課程 60 小時 + 函授課程 140 小時）</li>
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
    registry: "https://forms.gle/cySRyJgBoL1APehW9",
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