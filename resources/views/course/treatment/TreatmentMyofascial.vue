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
      <q>解開長期反復疼痛的肌肉，是緩解身體酸痛症狀的治療按摩。</q>
      <p>
        為什麼肩、頸、背、肘、腰、膝的疼痛，即使已經治療多次，仍然還是一再反覆發作？
      </p>
      <p>
        雖然知道自己姿勢不正確，但稍不留意就很容易彎腰、駝背、拱肩，這些問題的根源都是因為「肌筋膜」緊繃所造成的，如果包覆肌肉、肌腱和骨骼的「肌筋膜」沒有舒緩展開，就會很快回覆到緊繃狀態拉扯肌肉，自然在同樣的部位一再重複疼痛。
      </p>
      <p>
        肌筋膜系列課程透過專業的治療師，幫助你辨別身體筋膜位置，找出緊繃的筋膜線，並透過完整手法的教學，幫助你從肌筋膜的角度認識身體的疼痛警訊，並學習如何幫助緩解肌肉緊繃和疼痛。
      </p>
      <p>
        如果你有長期深受肌肉疼痛困擾的個案，這將會是一門專精於身體肌肉筋膜，提升按摩技法的專業課程。
      </p>
    </template>
    <template #skill>
      <div class="table_container">
        <table class="course_table" cellpadding="10">
          <tbody>
            <tr>
              <td>體力</td>
              <td>★★☆☆☆</td>
            </tr>
            <tr>
              <td>節奏感</td>
              <td>★★☆☆☆</td>
            </tr>
            <tr>
              <td>協調</td>
              <td>★★★☆☆</td>
            </tr>
            <tr>
              <td>練習</td>
              <td>★★★★☆</td>
            </tr>
            <tr>
              <td>個案直覺感受</td>
              <td>★★★★★</td>
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
        <li>辨別身體筋膜位置，找出緊繃的筋膜線。</li>
        <li>從肌筋膜的角度認識身體疼痛警訊。</li>
        <li>學習如何幫助緩解肌肉緊繃和疼痛。</li>
        <li>本課程手法完成後將核發修業證書。</li>
      </ol>
    </template>
    <template #payment>
      <ul>
        <li>本課程費用 9,000 元，含課程耗材、講義教材、不含毛巾組</li>
        <li>課程共 12 小時</li>
        <li>
          需使用芳療師專用毛巾組（有一定尺寸要求）原價 1500 ，學員優惠價格
          500，<br />可於日後使用在所有療程課程，已經有整套就不用買喔！
        </li>
      </ul>
    </template>
    <template #discount>
      <ul>
        <li>禾場學員9折</li>
        <li>兩人同行：學費優惠500元</li>
        <li>早鳥價：學費優惠500元（需一個月前報名）</li>
        <li>療程學苑合報優惠價：2堂以上合報85折、3堂以上合報8折</li>
        <li>
          Level 1 經典療程初階班 + Level 2 經典六種療程高階班合報優惠價：$60,000
        </li>
        <li>Level 2 經典六種療程高階班全階合報優惠價：$48,000</li>
        <li>
          關於 二階(入+中)/三階(入+中+高)/四階(入+中+高+英式按摩)
          合報優惠及其他優惠活動，請來電洽詢
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
        <li>
          禾場芳療學苑所有課程恕不接受錄音、錄影、拍攝等，所有課程講義亦已登記版權。
        </li>
        <li>
          任何內容如有遭到重製、散佈等權益受損之情事，禾場芳療學苑將根據智慧財產權依法追究。
        </li>
        <li>除不可抗力之因素外，所有課程開課後恕不接受換班。</li>
        <li>禾場芳療學苑保留所有課程調整與變動之權利。</li>
        <li>
          上課期間如遇颱風等天災，依人事行政局之發佈「停班公告
          (非停課)」比照辦理，並另擇日補課。
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
    title: "肌筋膜系列課程",
    type: "療程學苑",
    registry: "/course/signup",
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