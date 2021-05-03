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
    :isShowTaipei="isShowTaipei"
    :isShowTaichung="isShowTaichung"
    :isShowHsinchu="isShowHsinchu"
    :isShowTainan="isShowTainan"
    :isShowKaohsiung="isShowKaohsiung"
    :isShowPrecaution="isShowPrecaution"
    :isShowNotes="isShowNotes"
    :isShowMeasure="isShowMeasure"
  >
    <template #intro>
      <q>梳經理脈順氣調血，是傳承東方古老治療智慧的按摩法。</q>
      <p>
        有別於西方醫學重視人體各器官功能運作是否正常，東方中醫則是從「經絡暢通」、「氣血平衡」來論斷健康。
      </p>
      <p>
        中醫所講的「經絡」不等同於西醫所指的血管、淋巴管等有形的通路，而是遍布於全身，由經脈及絡脈組成的網絡系統。近代科學家更透過研究得知經絡是包覆於肌肉骨骼結締組織的筋膜上。
      </p>
      <p>
        從中醫的觀點來看，「經絡」如果調理得宜暢通無阻，氣血則能順行全身，五臟六腑、皮肉筋骨、關節及其他組織可獲得滋養，身體便不容易產生病痛。
      </p>
      <p>
        在本課程中，將帶領大家認識12經絡走向操作，搭配全身經絡按摩的專業手法，讓學員一次學會艱澀的穴位及經絡位置。並探討經絡與穴道之因果關係以及按摩手法的教授，同時教導大家如何在氣滯淤塞之處，運用不同的手勢及力道來梳理。
      </p>
      <p>
        經絡按摩應用廣泛、效果良好、施行容易且安全，可謂是最溫和的養生保健方式。經絡按摩課程不僅是單純的技法精進研修，更是承襲中國傳統治療的藝術精隨。
      </p>
    </template>
    <template #skill>
      <div class="table_container">
        <table class="course_table" cellpadding="10">
          <tbody>
            <tr>
              <td>體力</td>
              <td>★★★★★</td>
            </tr>
            <tr>
              <td>節奏感</td>
              <td>★★★☆☆</td>
            </tr>
            <tr>
              <td>協調</td>
              <td>★★★☆☆</td>
            </tr>
            <tr>
              <td>練習</td>
              <td>★★★★★</td>
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
        <li>本課程將教授完整經絡按摩療程操作。</li>
        <li>學習辨別穴位及經絡位置。</li>
        <li>課程內容包含個案諮商、配方調製及操作示範與實習。</li>
        <li>本課程手法完成後將核發修業證書。</li>
      </ol>
    </template>
    <template #payment>
      <ul>
        <li>本課程費用 27,000 元，含課程耗材、講義教材、不含毛巾組</li>
        <li>課程共 36 小時</li>
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
            <tr>
              <td>平日早上班</td>
              <td>09:30~12:30</td>
              <td>含開課日，共四週</td>
              <td>
                <ul class="date_list">
                  <li v-for="date in dates" :key="date">{{ date }}</li>
                </ul>
              </td>
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
            <tr>
              <td>平日早上班</td>
              <td>09:30~12:30</td>
              <td>含開課日，共四週</td>
              <td>
                <ul class="date_list">
                  <li v-for="date in dates" :key="date">{{ date }}</li>
                </ul>
              </td>
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
            <tr>
              <td>平日早上班</td>
              <td>09:30~12:30</td>
              <td>含開課日，共四週</td>
              <td>
                <ul class="date_list">
                  <li v-for="date in dates" :key="date">{{ date }}</li>
                </ul>
              </td>
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
            <tr>
              <td>平日早上班</td>
              <td>09:30~12:30</td>
              <td>含開課日，共四週</td>
              <td>
                <ul class="date_list">
                  <li v-for="date in dates" :key="date">{{ date }}</li>
                </ul>
              </td>
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
            <tr>
              <td>平日早上班</td>
              <td>09:30~12:30</td>
              <td>含開課日，共四週</td>
              <td>
                <ul class="date_list">
                  <li v-for="date in dates" :key="date">{{ date }}</li>
                </ul>
              </td>
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

export default {
  components: {
    CourseContent,
  },
  data: () => ({
    title: "經絡按摩療程",
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
    isShowTaipei: true,
    isShowTaichung: true,
    isShowHsinchu: true,
    isShowTainan: true,
    isShowKaohsiung: true,
    isShowPrecaution: true,
    isShowNotes: true,
    isShowMeasure: true,
    dates: [
      "2021-03-04 (四)",
      "2021-04-01 (四)",
      "2021-04-06 (二)",
      "2021-04-09 (五)",
      "2021-04-12 (一)",
    ],
  }),
};
</script>