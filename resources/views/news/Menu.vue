<template>
  <section class="menu">
    <div class="container">
      <ul class="menu_block">
        <li class="menu_box">
          <router-link to="/news/all" title="所有公告">所有公告</router-link>
        </li>
        <li class="menu_box">
          <router-link to="/news/class" title="課程公告">課程公告</router-link>
        </li>
        <li class="menu_box">
          <router-link to="/news/activity" title="活動公告"
            >活動公告</router-link
          >
        </li>
        <li class="menu_box">
          <router-link to="/news/other" title="其他公告">其他公告</router-link>
        </li>
      </ul>
    </div>
  </section>
</template>