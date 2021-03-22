<template>
  <ContentCenter :title="title" :type="type">
    <figure class="cert">
      <img src="@/image/index/NAHA_logo.png" alt="NAHA" />
    </figure>
    <b>NAHA是什麼?</b>
    <p>
      美國國家整體芳香療法協會The National Association for Holistic
      Aromatherapy是一個非營利組織，致力於將芳香療法推廣給大家，對象包括一般大眾、相關從業人員、公司企業、產品設計師、作家、教育單位、醫療保健專業人員和媒體，並提供有關芳香療法的經驗傳承和最新消息。
    </p>
    <p>
      除此之外，NAHA積極提倡並提升芳香療法教育的學院標準，同時也致力於推廣真正的芳香療法使用、芳香療法安全性，以及其在日常生活中安全及有效的應用。
    </p>
    <p>
      NAHA每年會固定舉辦大型的芳香療法研討會，聘請全球知名的芳香療法專家與科學研究學者來做最新的研究報告與實驗結果的演說，並在會議中安排各種的專題研討小組。
    </p>
    <p>
      美國國家芳療師協會（NAHA）一直以來是擁有全世界最嚴格、最完整的芳香療法教育認證著稱，尤其制定一套完整而嚴格的訓練標準。
    </p>
    <p>
      凡要申請加入NAHA專業芳療師會員的人都必須提出訓練證明，而這些訓練必須由通過NAHA審核、並認可的認證中心主持，因此對於美國甚至海外認證中心審核之嚴格可想而知，能通過審核的認證中心寥寥可數，這些大多需要由經過完整正統芳療訓練、並進行研究、執業多年的芳療師設計課程，待NAHA教育委員會層層審核通過後才能通過授權的。
    </p>
    <b>禾場國際芳療學院</b>
    <p>
      在2003年10月，美國國家芳療師協會（NAHA）發了兩項教育認證給禾場國際芳療學苑—初階芳香療法課程與高階芳療師培訓課程證書許可。
      <br />在2020年4月獲得NAHA Level 3 的授權許可。
    </p>
    <p>
      也就是說，在禾場完成專業課程的學員們在證書上都會蓋有美國國家芳療師協會的核可專印，並且完成禾場進階芳療師培訓課程的學員還能直接申請加入NAHA的專業芳療師會員會員。
    </p>
    <p>
      如果您對芳香療法有濃厚的興趣，甚至想要成為一名專業的芳療師，NAHA認可的禾場芳香療法課程您一定不能錯過！
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
    title: "關於NAHA",
    type: "NAHA",
  }),
};
</script>