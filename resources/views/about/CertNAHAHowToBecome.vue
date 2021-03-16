<template>
  <ContentCenter :title="title" :type="type">
    <b>前言</b>
    <p>
      隨著芳香療法行業的發展，作為芳香療法領域的領導組織，我們會不時審查我們的教育標準，以保持最新的安全標準。建議您（倡導者，學生或教育者）要定期查看我們的教育標準，熟悉新的準則。
    </p>
    <b>重點內容</b>
    <ol>
      <li>
        NAHA沒有負責提供審核關於按摩療法的批准程序，有關按摩的部分應通過NCBTMB（國家按摩和身體按摩認證委員會）或您所在國家的按摩療法委員會進行審查。
      </li>
      <li>與按摩療法有關的任何時數均不會計入NAHA所需的教育標準小時。</li>
      <li>
        我們表明某些精油不適合未經稀釋就塗抹在皮膚上，如果未事先在載體中適當稀釋就施用，可能會刺激或刺激皮膚。
      </li>
      <li>NAHA不支持使用未稀釋的皮膚致敏精油的“滴劑療法”的使用或應用。</li>
      <li>
        未經稀釋應用到皮膚上的過量精油的教育課程，將不被接受作為任何學校申請的一部分，也不屬於NAHA總體教育標準的一部分。也不接受作為畢業要求的一部分提交的學生案例研究。
      </li>
    </ol>
    <b>成為認可學校的要求</b>
    <p>
      您將需要提供有關學校的一些基本信息，以及上載一些文檔。<br />
      CASE申請文件：
    </p>
    <ol>
      <li>
        芳香療法課程的詳細打字課程或教學大綱，包括：主題，要求，學習目標和授課時間。您可以在此處找到有關編寫課程提綱的信息：<a
          href="https://teaching.cornell.edu/teaching-resources/designing-your-course/writing-syllabus"
          target="_blank"
          rel="noopener noreferrer"
          >https://teaching.cornell.edu/teaching-resources/designing-your-course/writing-syllabus</a
        >
      </li>
      <li>所有營銷和行銷有關的副本，包括手冊，名片等。</li>
      <li>營業執照副本</li>
      <li>您的學校頒發給學生的結業證書副本</li>
      <li>
        所有教師的列表。(注意：所有主要講師必須是NAHA
        2級或更高級別的成員。在申請之前，初級講師必須教授符合NAHA準則的課程至少一年。)
      </li>
      <li>所有主要講師的專業簡歷或簡歷。</li>
      <li>您還需要同意CASE標準，NAHA道德規範和NAHA徽標使用條款。</li>
      <li>
        成為獲批准的學校，美國或加拿大學校的年費為250美元，國際學校的年費為450美元。
      </li>
      <li>
        如果您的學校有多個地點，則每個地點都必須支付費用，但是超出第一個地點的學生可以享受折扣價（美國/加拿大為125美元，國際為225美元）。
      </li>
      <li>您必須先支付學費，然後才能提交CASE申請。</li>
      <li>如果您的申請被拒絕，我們將退還您的費用減去100美元的手續費。</li>
      <li>
        如果您有任何疑問，請隨時與我們的學校團隊聯繫：<a
          href="mailto:schools@naha.org"
          >schools@naha.org</a
        >。
      </li>
    </ol>
    <br />
    <p>請按照以下說明成為批准的學校：</p>
    <b>步驟</b>
    <ol>
      <li>
        在此處登錄您的會員頁面：<a
          href="https://naha.org/account/login"
          target="_blank"
          rel="noopener noreferrer"
          >https://naha.org/account/login</a
        >
      </li>
      <li>
        您需要成為2級，3級或商務會員才能繼續。如果不是，您也可以從“帳戶頁面”中獲得一個。
      </li>
      <li>
        在menu“帳戶導航”的右側，找到menu
        “添加訂閱”連接，並使用該連接添加適合您所在地區的學校訂閱。之後，您將被帶回menu
        “帳戶”主頁面。
      </li>
      <li>從menu “帳戶導航”中，選擇“訂閱和帳單”。</li>
      <li>在左側找到您的學校訂閱，然後使用那裡的連接在線上填寫CASE申請表。</li>
    </ol>
    <b>注意</b>
    <ul>
      <li>在您填寫線上CASE表格之前，我們將無法處理您的學校申請。</li>
      <li>
        提交學校申請，即表示您同意NAHA的條款，包括遵守NAHA
        CASE標準和NAHA道德守則。
      </li>
      <li>您的申請費包括不可退還的100美元手續費。</li>
      <li>
        NAHA認為剽竊是嚴重罪行，若發現者立即終止會員資格並從NAHA批准的學校名單中刪除。
      </li>
      <li>
        剽竊後的新成立學校申請也將不獲批准，並會導致申請人的NAHA個人會員資格也同時被撤銷。
      </li>
    </ul>
  </ContentCenter>
</template>

<script>
import ContentCenter from "@/views/component/ContentCenter.vue";

export default {
  components: {
    ContentCenter,
  },
  data: () => ({
    title: "如何成為NAHA美國國家芳療師協會認可的芳療學校",
    type: "NAHA",
  }),
};
</script>