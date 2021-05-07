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
        2006年前後，芳療圈開始討論作為臨床、職業或是真正能夠達到專業水準的芳療師，以200個小時作為Level
        2訓練標準是否足夠，於是提出全新架構的Level
        3這樣的檢討聲浪在NAHA、CFA、IFPA、IFA各大芳療協會皆有著相當的聲量！
      </p>
      <p>
        在2017年NAHA正式將Level
        3的臨床芳療師的專業標準進入委員會的討論，並於2018年正式將NAHA多年來維持的芳療師最高標準Level
        2 大幅的往前推進到了300個小時的新專業標準規範。
      </p>
      <p>
        禾場國際芳療學苑也將率先於今年9月正式推出 NAHA標準的Level 3臨床芳療師認證課程。<br />
        禾場講師群具備護理，藥理，心理，諮商及大量的實務、臨床經驗。歡迎想要取得NAHA
        Level3的芳療師報名進修。
      </p>
      <p>為何要上Level3 ?</p>
      <p>
        芳療臨床訓練，強調更進一步的瞭解生理機轉及芳療精油的科學分析，更是近年來興起的法國系統的芳香療法的特色！<br />
        透過醫學、護理、生化分析的角度更近一度的瞭解精油與我們人體互動的實證效果。
      </p>
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
              <td>
                人體生理機轉進階與疾病探討：皮膚系統，循環系統，生殖系統，肌肉骨骼系統，淋巴免疫系統，內分泌系統，神經系統，泌尿系統和消化系統
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>臨床研究文獻探討與結合芳療照護的實務應用</td>
            </tr>
            <tr>
              <td>3</td>
              <td>中醫芳療心理學</td>
            </tr>
            <tr>
              <td>4</td>
              <td>中醫基礎概念及身心疾病各論</td>
            </tr>
            <tr>
              <td>5</td>
              <td>中醫經絡芳療：芳療與經絡應用實務及訓練</td>
            </tr>
            <tr>
              <td>6</td>
              <td>芳療技法總論：芳療與各式技法特論</td>
            </tr>
            <tr>
              <td>7</td>
              <td>芳療按摩臨床個案分析</td>
            </tr>
            <tr>
              <td>8</td>
              <td>壓力、失眠專題</td>
            </tr>
            <tr>
              <td>9</td>
              <td>高齡醫學與慢性病預防與照護</td>
            </tr>
            <tr>
              <td>10</td>
              <td>專題個案分析</td>
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
        <li>面授課程費用 45,000 元，含課程費、講義、耗材</li>
        <li>直播課程費用 40,000 元，含課程費、講義、耗材</li>
        <li>每週上課 4-6 小時 (約20週)</li>
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
    title: "臨床芳療師認證課程",
    type: "芳療學苑",
    registry:
      "https://docs.google.com/forms/d/1kLVWhTg5uD-QYLwgOjsq8MNnEbDLFXLH-Y1QFVbY_pI/viewform?ts=5ed6106d&edit_requested=true",
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