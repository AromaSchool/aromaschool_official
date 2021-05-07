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
        <li>美國NAHA Level2 國際芳療師專業認證課程需完成：入門 + 中階 + 高階</li>
        <li>英國IFPA國際芳療師認證班需完成：入門 + 中階 + 高階 + 英式按摩</li>
      </ul>
    </template>
    <template #feature>
      <ol>
        <li>課程架構符合國際芳療師協會NAHA、IFPA認證標準</li>
        <li>教學生動融入DIY、體驗、回饋，講師教學深入淺出</li>
        <li>每班有學員人數上限，確保學習品質，並與老師皆能有所交流互動</li>
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
        <li>本課程費用 9,500 元 (舊生、現金9折)，含課程費、講義、耗材</li>
        <li>課程共 24 小時</li>
        <li>
          關於 二階(入+中)/三階(入+中+高)/四階(入+中+高+英式按摩) 合報優惠及其他優惠活動，請來電洽詢
          <a href="tel:0227112290" title="02-27112290" class="link"
            ><i class="fas fa-phone-alt"></i>02-27112290</a
          >
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
            <tr v-for="datum in data[0]" :key="`setting-${datum.id}`">
              <template v-if="datum.batches.length">
                <td>{{ `${datum.schedule.name}班` }}</td>
                <td>{{ `${datum.startTime}~${datum.endTime}` }}</td>
                <td>{{ `含開課日，共${datum.weeks}週` }}</td>
                <td>
                  <ul class="date_list">
                    <li v-for="batch in datum.batches" :key="`batch-${batch.id}`">
                      {{ batch.startDate }}
                    </li>
                  </ul>
                </td>
              </template>
              <template v-else>
                <td colspan="4" class="center">敬請期待</td>
              </template>
            </tr>
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
            <tr v-for="datum in data[1]" :key="`setting-${datum.id}`">
              <template v-if="datum.batches.length">
                <td>{{ `${datum.schedule.name}班` }}</td>
                <td>{{ `${datum.startTime}~${datum.endTime}` }}</td>
                <td>{{ `含開課日，共${datum.weeks}週` }}</td>
                <td>
                  <ul class="date_list">
                    <li v-for="batch in datum.batches" :key="`batch-${batch.id}`">
                      {{ batch.startDate }}
                    </li>
                  </ul>
                </td>
              </template>
              <template v-else>
                <td colspan="4" class="center">敬請期待</td>
              </template>
            </tr>
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
            <tr v-for="datum in data[2]" :key="`setting-${datum.id}`">
              <template v-if="datum.batches.length">
                <td>{{ `${datum.schedule.name}班` }}</td>
                <td>{{ `${datum.startTime}~${datum.endTime}` }}</td>
                <td>{{ `含開課日，共${datum.weeks}週` }}</td>
                <td>
                  <ul class="date_list">
                    <li v-for="batch in datum.batches" :key="`batch-${batch.id}`">
                      {{ batch.startDate }}
                    </li>
                  </ul>
                </td>
              </template>
              <template v-else>
                <td colspan="4" class="center">敬請期待</td>
              </template>
            </tr>
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
            <tr v-for="datum in data[3]" :key="`setting-${datum.id}`">
              <template v-if="datum.batches.length">
                <td>{{ `${datum.schedule.name}班` }}</td>
                <td>{{ `${datum.startTime}~${datum.endTime}` }}</td>
                <td>{{ `含開課日，共${datum.weeks}週` }}</td>
                <td>
                  <ul class="date_list">
                    <li v-for="batch in datum.batches" :key="`batch-${batch.id}`">
                      {{ batch.startDate }}
                    </li>
                  </ul>
                </td>
              </template>
              <template v-else>
                <td colspan="4" class="center">敬請期待</td>
              </template>
            </tr>
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
            <tr v-for="datum in data[4]" :key="`setting-${datum.id}`">
              <template v-if="datum.batches.length">
                <td>{{ `${datum.schedule.name}班` }}</td>
                <td>{{ `${datum.startTime}~${datum.endTime}` }}</td>
                <td>{{ `含開課日，共${datum.weeks}週` }}</td>
                <td>
                  <ul class="date_list">
                    <li v-for="batch in datum.batches" :key="`batch-${batch.id}`">
                      {{ batch.startDate }}
                    </li>
                  </ul>
                </td>
              </template>
              <template v-else>
                <td colspan="4" class="center">敬請期待</td>
              </template>
            </tr>
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
    title: "芳香療法認證課程中階班",
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
  },
};
</script>