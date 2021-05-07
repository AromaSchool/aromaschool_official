<template>
  <CourseContent
    :title="title"
    :type="type"
    :registry="registry"
    :isShowSchedule="isShowSchedule"
    :isShowSkill="isShowSkill"
    :isShowProcess="isShowProcess"
    :isShowFeature="isShowFeature"
    :isShowSuitable="isShowSuitable"
    :isShowTarget="isShowTarget"
    :isShowPayment="isShowPayment"
    :isShowDiscount="isShowDiscount"
    :isShowPrecaution="isShowPrecaution"
    :isShowNotes="isShowNotes"
    :isShowMeasure="isShowMeasure"
    :isShowTaipei="!!data[0]"
    :isShowTaichung="!!data[1]"
    :isShowHsinchu="!!data[2]"
    :isShowTainan="!!data[3]"
    :isShowKaohsiung="!!data[4]"
  >
    <template #intro>
      <q>調理臉部肌理釋放頭顱壓力，是安撫生命運作核心的局部按摩法。</q>
      <p>
        視覺、聽覺、味覺和嗅覺等重要感官神經皆位於頭臉部，它的重要性在於表達，同時直觀反應出我們的身心狀態。
      </p>
      <p>
        芳香療法對於使用於淺層臉部與深層頭顱有不同對應處理方式，臉部除了可針對肌膚問題選用適當精油給予深層的保養代謝，並且讓已經脆弱的部分得以重建，回復到原生健康的肌膚。
      </p>
      <p>
        而更深一層頭顱所保護的腦是主管我們的生命運作，健康無壓的腦部才能順利的將身體內外所接收的刺激透過神經系統傳遞，再由腦部判斷後做出適當正確的反應。
      </p>
      <p>
        透過按摩臉部及頭顱，刺激神經末稍與淋巴系統，處理頭顱周邊循環，將有助於釋放顱內壓力，並輔以精油香氣引領感官進入另一個層次，若你想從局部按摩手法開始，減緩身處高壓工作親友的壓力，或者希望進階提升顱顏技法，這都是一門讓思緒完全沉靜，轉換情緒的推薦課程。
      </p>
    </template>
    <template #skill>
      <div class="table_container">
        <table class="course_table" cellpadding="10">
          <tbody>
            <tr>
              <td>體力</td>
              <td>★☆☆☆☆</td>
            </tr>
            <tr>
              <td>節奏感</td>
              <td>★☆☆☆☆</td>
            </tr>
            <tr>
              <td>協調</td>
              <td>★☆☆☆☆</td>
            </tr>
            <tr>
              <td>練習</td>
              <td>★★★☆☆</td>
            </tr>
            <tr>
              <td>個案直覺感受</td>
              <td>★★★★☆</td>
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
        <li>此課程讓您學習皮膚的基本結構、類型、及臉部肌膚特質判斷。</li>
        <li>學習如何舒緩肩頸痠痛，活化臉部肌膚、釋放臉部壓力，還原緊實光采的肌膚。</li>
        <li>讓皮膚沉浸在芳香分子帶來的舒壓響宴！</li>
        <li>本課程手法完成後將核發修業證書。</li>
      </ol>
    </template>
    <template #payment>
      <ul>
        <li>本課程費用 9,000 元，含課程耗材、講義教材、不含毛巾組</li>
        <li>課程共 12 小時</li>
        <li>
          需使用芳療師專用毛巾組（有一定尺寸要求）原價 1500 ，學員優惠價格 500，<br />可於日後使用在所有療程課程，已經有整套就不用買喔！
        </li>
      </ul>
    </template>
    <template #discount>
      <ul>
        <li>禾場學員9折</li>
        <li>兩人同行：學費優惠500元</li>
        <li>早鳥價：學費優惠500元（需一個月前報名）</li>
        <li>療程學苑合報優惠價：2堂以上合報85折、3堂以上合報8折</li>
        <li>Level 1 經典療程初階班 + Level 2 經典六種療程高階班合報優惠價：$60,000</li>
        <li>Level 2 經典六種療程高階班全階合報優惠價：$48,000</li>
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
    <template #precaution>
      <ol>
        <li>
          療程課程內容單純為技法課程，「無」任何芳香療法內容（也不含教授如何調油或如何諮詢），若想要學習相關芳療專業，成為全方位芳療師，歡迎同時報名「<router-link
            to="/course/aromatherapy/elementary"
            title="芳香療法課程"
            class="link"
            >芳香療法課程</router-link
          >」。
        </li>
        <li>
          療程課程為技法教育，不代表任何公司或品牌之技法療程，非就業之標準。上課老師在業界擁有多年的療程經驗，但無法保證上課學員任何工作機會。療程技法注重不斷練習與經驗，上課後，學員需自行安排時間複習才能熟練與貫通。
        </li>
        <li>
          芳香療法專業與療程課程「應無」性別限制，上課時可能男女混班。上課前都會提前告知該班是否有男性學員。上課過程中，講師與學員都會待在同一空間上課，敬請放心參加課程。
        </li>
      </ol>
    </template>
    <template #notes>
      <ol>
        <li>上課名額之保留，將以報名繳費先後為依據。</li>
        <li>每堂課請務必簽到，以便確認您的出席。</li>
        <li>申請「技法修業證書」需按各課程之結業規定。</li>
        <li>
          欲申請IFPA認證者需上Level 1 英式芳療按摩療程（含考試），Level2
          課程為研修課程，僅上課不含考試。
        </li>
        <li>為維護所有參與學員之權益，本課程不提供試聽及旁聽。</li>
        <li>禾場芳療學苑所有課程恕不接受錄音、錄影、拍攝等，所有課程講義亦已登記版權。</li>
        <li>任何內容如有遭到重製、散佈等權益受損之情事，禾場芳療學苑將根據智慧財產權依法追究。</li>
        <li>除不可抗力之因素外，所有課程開課後恕不接受換班。</li>
        <li>禾場芳療學苑保留所有課程調整與變動之權利。</li>
        <li>
          上課期間如遇颱風等天災，依人事行政局之發佈「停班公告 (非停課)」比照辦理，並另擇日補課。
        </li>
        <li>上課前會通知加入班級群組，以利學務事項公布。</li>
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
    title: "顱顏深層按摩療程",
    type: "療程學苑",
    registry:
      "https://docs.google.com/forms/d/1VfaJWGZpoj2snOIwwGHamnlC_HPbwG-QLSsgtvHDIAE/viewform?edit_requested=true",
    isShowSchedule: false,
    isShowSkill: true,
    isShowProcess: true,
    isShowFeature: true,
    isShowSuitable: false,
    isShowTarget: false,
    isShowPayment: true,
    isShowDiscount: true,
    isShowPrecaution: true,
    isShowNotes: true,
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