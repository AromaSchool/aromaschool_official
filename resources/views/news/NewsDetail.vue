<template>
  <div class="container flex_container">
    <div class="main_side">
      <ContentCenter :title="title" :type="type" :date="date">
        <div v-html="content"></div>
      </ContentCenter>
      <BackBtn></BackBtn>
    </div>
    <SubSide></SubSide>
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
    title: "禾場因應新冠肺炎教室防疫措施升級公告",
    date: "2020/03/26",
    type: "課程公告",
    content: `<p><span style="font-size:16px;">因應新型冠狀病毒肺炎(COVID-19)疫情發展情勢，禾場防疫措施加強升級，進入學苑敬請配合以下注意事項：<br>
&nbsp;<br>
<strong>　＊即日起教室座位由三人一桌改為兩人一桌，教室上課人數按空間大小調整為10-12人，區隔安全距離</strong><br>
&nbsp;<br>
　先前已發布之教室防疫措施將持續進行：</span></p>

<p style="margin-left: 40px;"><span style="font-size:16px;">&nbsp;1. 學苑每日於課前課後都會進行環境消毒，並進行24小時精油擴香抑菌</span></p>

<p style="margin-left: 40px;"><span style="font-size:16px;">&nbsp;2. 請學員務必全程配戴口罩</span></p>

<p style="margin-left: 40px;"><span style="font-size:16px;">&nbsp;3. 入口處請配合體溫測量並進行紀錄，若高於38度(含)或37.5-38度有咳嗽呼吸道等症狀與身體不適，則無法進入學苑(包括員工講師)<br>
&nbsp;4. 建議若有上述或不適症狀，務必請先告知導師，學苑將安排補課方式：<br>
　 (1)線上或現場DV補課　<br>
　 (2)現場跨班補課<br>
&nbsp;5.&nbsp;目前還有美國NAHA國際芳療師認證線上課程，提供學員在家上課。<br>
&nbsp;6. 歡迎使用酒精消毒雙手(入口處)</span></p>

<p><span style="font-size:16px;">　禾場國際芳療學苑關心您</span></p>`,
  }),
};
</script>
