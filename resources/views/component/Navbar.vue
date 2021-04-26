<template>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light navbar_as">
    <div class="container">
      <router-link to="/" class="navbar-brand" title="首頁">
        <img src="@/image/logo.svg" alt="logo" />
      </router-link>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item dropdown">
            <router-link
              to="/about"
              :title="routes[1].meta.title"
              class="nav-link dropdown-toggle"
              id="navbarDropdownMenuLink"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              >{{ routes[1].meta.title }}</router-link
            >
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <router-link
                  to="/about/brand"
                  :title="routes[1].children[0].meta.title"
                  class="dropdown-item"
                  >{{ routes[1].children[0].meta.title }}</router-link
                >
              </li>
              <li>
                <router-link
                  to="/about/event"
                  :title="routes[1].children[1].meta.title"
                  class="dropdown-item"
                  >{{ routes[1].children[1].meta.title }}</router-link
                >
              </li>
              <li>
                <router-link
                  to="/about/interCert"
                  :title="routes[1].children[2].meta.title"
                  class="dropdown-item"
                  >{{ routes[1].children[2].meta.title }}</router-link
                >
              </li>
              <li>
                <router-link
                  to="/about/teamMember"
                  :title="routes[1].children[3].meta.title"
                  class="dropdown-item"
                  >{{ routes[1].children[3].meta.title }}</router-link
                >
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <router-link to="/news/category/all" class="nav-link"
              >最新消息</router-link
            >
          </li>
          <li class="nav-item dropdown">
            <router-link
              to="/"
              class="nav-link dropdown-toggle"
              id="navbarDropdownMenuLink"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              >芳療課程</router-link
            >
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <router-link to="/" class="dropdown-item">芳療學苑</router-link>
                <ul class="dropdown-submenu">
                  <li>
                    <router-link to="/" class="dropdown-item"
                      >芳香療法認證課程入門班</router-link
                    >
                  </li>
                  <li>
                    <router-link to="/" class="dropdown-item"
                      >芳香療法認證課程中階班</router-link
                    >
                  </li>
                  <li>
                    <router-link to="/" class="dropdown-item"
                      >芳香療法認證課程高階班</router-link
                    >
                  </li>
                  <li>
                    <router-link to="/" class="dropdown-item"
                      >臨床芳療師認證課程</router-link
                    >
                  </li>
                  <li>
                    <router-link to="/" class="dropdown-item"
                      >芳療認證課程網路全階班</router-link
                    >
                  </li>
                </ul>
              </li>
              <li>
                <router-link to="/" class="dropdown-item">療程學苑</router-link>
                <ul class="dropdown-submenu">
                  <li>
                    <router-link to="/" class="dropdown-item"
                      >英式芳療按摩療程</router-link
                    >
                  </li>
                  <li>
                    <router-link to="/" class="dropdown-item"
                      >淋巴引流按摩療程</router-link
                    >
                  </li>
                  <li>
                    <router-link to="/" class="dropdown-item"
                      >顱顏深層按摩療程</router-link
                    >
                  </li>
                  <li>
                    <router-link to="/" class="dropdown-item"
                      >孕產婦芳療療程</router-link
                    >
                  </li>
                  <li>
                    <router-link to="/" class="dropdown-item"
                      >肌筋膜系列課程</router-link
                    >
                  </li>
                  <li>
                    <router-link to="/" class="dropdown-item"
                      >瑞典式按摩療程</router-link
                    >
                  </li>
                  <li>
                    <router-link to="/" class="dropdown-item"
                      >經絡按摩療程</router-link
                    >
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <router-link to="/presentation" class="nav-link"
              >香氣發表會</router-link
            >
          </li>
          <li class="nav-item dropdown">
            <router-link
              to="/blog/all"
              class="nav-link dropdown-toggle"
              id="navbarDropdownMenuLink"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              >學苑周刊</router-link
            >
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <router-link to="/blog/category/all" class="dropdown-item"
                  >所有文章</router-link
                >
              </li>
              <li v-for="blogCategory in bolgCategories" :key="blogCategory.id">
                <router-link
                  :to="`/blog/category/${blogCategory.id}`"
                  class="dropdown-item"
                >
                  {{ blogCategory.name }}
                </router-link>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <router-link
              to="/"
              class="nav-link"
              href="http://ra.aromaharvest.com.tw/index.php"
              target="_blank"
              rel="noreferer noopener"
              >學員專區</router-link
            >
          </li>
          <li class="nav-item">
            <router-link
              to="/"
              class="nav-link"
              href="https://www.aromaharvest.com/"
              target="_blank"
              rel="noreferer noopener"
              >芳療產品</router-link
            >
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
import { BlogCategory } from "@/js/api";
import { routes } from "@/js/routes.js";

export default {
  data: () => ({
    routes: routes,
    bolgCategories: [],
  }),
  created() {
    this.getBlogCategories();
  },
  methods: {
    getBlogCategories() {
      BlogCategory.getList().then((response) => {
        this.bolgCategories = response;
      });
    },
  },
};
</script>