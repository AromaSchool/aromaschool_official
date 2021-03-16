<template>
  <ContentCenter :title="title" :type="type">
    <p>
      NAHA美國國家芳療師協會是由一群在科羅拉多州Boulder市的芳香療法師所發起的，創始成員於1990年聚集在美國的科羅拉多州一起學習倫敦芳香療法學院進行的為期10個月的函授課程。
    </p>
    <p>
      原本只是幾個志同道合的同學之間的連結，到現在已經成為美國芳療界與世界各地連結的主要觸角。第一屆的創會指導委員會由全球芳療界先驅所組成，直到今天，NAHA已經完全由北美洲本地的專業芳療師管理，會員廣及世界各地。
    </p>
    <p>
      Patricia Davis 是該課程的創始人，也是著名作者《Aromatherapy A-Z》《Subtle
      Aromatherapy》，另外一位是Ann
      Berwick，是Patricia在英國學習的長期導師，並安排成為我們在科羅拉多州當地的首席導師。
    </p>
    <p>
      在培訓過程中，
      Patricia來到科羅拉多州進行三次的培訓，提供實用的課程，其中包括：Margurite
      Maury傳統的全身芳香療法按摩、諮詢和文獻編寫力、
      橘皮組織的身體護理、鼻竇炎以及芳香療法口腔按摩和實用檢查。
    </p>
    <p>
      在課程結束後，因為他們發現大眾對於精油知識的不足，因此他們認為美國需要更嚴謹的芳香療法教育制度，以提升大眾的芳香療法知識，NAHA美國國家芳療師協會便創立來進行各種相關教育活動，致力於發展推廣高標準的芳香療法教育給一般大眾，並支持在日常生活中使用芳香療法。
    </p>
    <p>
      除了在美國國內交流外，NAHA也與世界各國芳香療法界的專業人士及廠商持續進行專業領域的資訊交流，並且與國際芳療協會，如IFA英國國際芳香療法師協會和IFPA國際專業芳香療法師協會、英國農業委員會(AOC)和美國消費者聯合會(CFA)聯盟等世界各國的芳香療法機構及專業人士持續進行結盟與專業領域的資訊交流。
    </p>
  </ContentCenter>
</template>

<script>
import ContentCenter from "@/views/component/ContentCenter.vue";

export default {
  components: {
    ContentCenter,
  },
  data: () => ({
    title: "NAHA的歷史",
    type: "NAHA",
  }),
};
</script>