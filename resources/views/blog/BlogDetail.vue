<template>
  <div class="container flex_container">
    <div class="main_side">
      <ContentCenter :title="title" :type="type" :date="date">
        <p>
          學習芳療之後，我開始會去觀察身邊的親友們，聞到精油後所出現的反應。這些反應所產生的情緒是很值得去探索並深入了解的。
        </p>
        <p>
          你可能會聽過精油抓周常提起「植物人格」一詞，是因為植物生長環境與生長型態的不同，所展現出來的行為特性，正好與人的個性、行為、情感和情緒模式相對應，例如：生命力強的岩蘭草，長長的根緊緊的抓住大地，對應的人格即是安定性高、腳步紮實穩定⋯。
        </p>
        <p>
          今天AC卡人格時間，Evelyn老師要跟大家分享的是學員E的牌卡解析，其中一張就是出現了岩蘭草。
        </p>
        <p>／Evelyn老師聊AC人格卡／</p>
        <p>依抓到的順序是：胡蘿蔔籽、安息香和岩蘭草</p>
        <p>
          E的工作跟設計有關，胡蘿蔔籽就像是細膩又敏銳的藝術家性格，正好跟她的職業不謀而合⋯。她的腳踏實地、喜歡自由、不受世俗的框架都像極了胡蘿蔔籽獨特的氣味。
        </p>
        <p>
          一直充滿著理念，一心想把事情做好、做滿，卻因為信念不被支持而無法達到自我要求，出現了疲憊和孤獨的狀態，這時候就讓安息香的甜蜜香氣緩和憂慮和精神壓力，好好呵護和滋養消耗殆盡的內心。
        </p>
        <p>
          究竟是什麼事是無法掌握的而造成不安情緒的？是岩蘭草要提醒我們的部分。
          在堅持自己的原則時或是心中有不同的想法時，難免在溝通過程中有些不愉快，試著用岩蘭草恢復平靜後再去談談，也許會有不同的結果。
          另外因為工作過度導致身心疲勞時，用岩蘭草放鬆緊繃的神經，還能藉此強化心靈，提升毅力和挑戰精神，剛好適合努力不懈的E。
        </p>
      </ContentCenter>
      <BackBtn to="/news/category/all"></BackBtn>
    </div>
    <SubSide
      :categoriesTitle="categoriesTitle"
      :rankTitle="rankTitle"
    ></SubSide>
  </div>
</template>

<script>
import ContentCenter from "@/views/component/ContentCenter.vue";
import BackBtn from "@/views/component/BackBtn.vue";
import SubSide from "@/views/component/SubSide.vue";

export default {
  components: {
    ContentCenter,
    BackBtn,
    SubSide,
  },
  data: () => ({
    title: "植物解讀身體的訊息，善用香氣來癒療自己的情緒",
    type: "禾場周報",
    date: "2021/04/09",
    categoriesTitle: "文章分類",
    rankTitle: "熱門文章",
  }),
};
</script>
