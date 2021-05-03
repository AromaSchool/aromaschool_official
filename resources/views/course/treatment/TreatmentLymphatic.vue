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
      <q>梳理身體免疫網絡喚起自癒本能，是輕如羽毛般撫觸的進階按摩法。</q>
      <p>
        淋巴按摩源自西元1930年代歐洲Emile
        Vodder醫師，為幫助特定淋巴系統失調疾患而研發的一種徒手治療，運用範圍非常廣泛，包括肌膚健康、運動傷害、偏頭痛、減脂，水腫、身心疲倦等等。<br />在過去幾十年期間，淋巴引流按摩在全世界各國醫療人員、物理治療復健人員、美容芳療從業人員廣為使用，並且不斷地做出大幅度的修正與改良。
      </p>
      <p>
        淋巴系統是人體內重要的免疫及排毒樞紐，一旦運行不暢，淋巴液中的老舊廢棄物也會滯留，影響身體正常排毒功能，降低免疫能力。
      </p>
      <p>
        徒手淋巴引流按摩配合呼吸節奏，依照淋巴循環的路徑引流。<br />其特徵是運用身體律動，以指腹與掌丘為著力點，首先刺激人體淋巴匯聚之處，如腳踝、膕窩、鼠蹊、腋窩、鎖骨等；循著身體循環以每7秒移動的速率，不疾不徐的韻律按摩，輕緩、服貼的細膩手法推動著體內淋巴液的流動與循環。
      </p>
      <p>
        淋巴引流按摩手法雖輕卻不失力度，雖淺卻不失深度，施作在皮下淋巴所在之處，適合幫助重症病患，手術後調理，或者高齡長輩、嬰幼兒保健，能宛若疏通身體的河道般，幫助飽含水分的身體順暢流動，帶走瘀塞已久的混濁，注入新能量。
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
              <td>★★☆☆☆</td>
            </tr>
            <tr>
              <td>個案直覺感受</td>
              <td>★★☆☆☆</td>
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
        <li>本課程教授完整徒手淋巴引流療程操作，包含手技與淋巴引流學理。</li>
        <li>
          學習本課程有助開發對自己身體的運用及感受性，其難度亦比肌肉骨骼、穴道經絡型手法容易上手。
        </li>
        <li>本課程手法完成後將核發修業證書。</li>
      </ol>
    </template>
    <template #payment>
      <ul>
        <li>本課程費用 13,500 元，含課程耗材、講義教材、不含毛巾組</li>
        <li>課程共 24 小時 + 3 小時考試</li>
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
    title: "淋巴引流按摩療程",
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