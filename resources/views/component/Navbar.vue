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
      <div class="nav-wrapper" id="navbarNavDropdown">
        <div class="navbar-collapse">
          <ul class="navbar-nav">
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
              <router-link to="/news/category/all" :title="routes[2].meta.title" class="nav-link">
                {{ routes[2].meta.title }}
              </router-link>
            </li>
            <li class="nav-item dropdown">
              <router-link
                to="/course/aromatherapy/elementary"
                :title="routes[3].meta.title"
                class="nav-link dropdown-toggle"
                id="navbarDropdownMenuLink"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                >{{ routes[3].meta.title }}</router-link
              >
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                  <div class="dropdown-item">芳療學苑</div>
                  <ul class="dropdown-submenu">
                    <li>
                      <router-link
                        to="/course/aromatherapy/elementary"
                        class="dropdown-item"
                        :title="routes[3].children[0].meta.title"
                        >{{ routes[3].children[0].meta.title }}</router-link
                      >
                    </li>
                    <li>
                      <router-link
                        to="/course/aromatherapy/intermediate"
                        class="dropdown-item"
                        :title="routes[3].children[1].meta.title"
                        >{{ routes[3].children[1].meta.title }}</router-link
                      >
                    </li>
                    <li>
                      <router-link
                        to="/course/aromatherapy/advanced"
                        class="dropdown-item"
                        :title="routes[3].children[2].meta.title"
                        >{{ routes[3].children[2].meta.title }}</router-link
                      >
                    </li>
                    <li>
                      <router-link
                        to="/course/aromatherapy/clinical"
                        class="dropdown-item"
                        :title="routes[3].children[3].meta.title"
                        >{{ routes[3].children[3].meta.title }}</router-link
                      >
                    </li>
                  </ul>
                </li>
                <li>
                  <div class="dropdown-item">療程學苑</div>
                  <ul class="dropdown-submenu">
                    <li>
                      <router-link
                        to="/course/treatment/british"
                        class="dropdown-item"
                        :title="routes[3].children[4].meta.title"
                        >{{ routes[3].children[4].meta.title }}</router-link
                      >
                    </li>
                    <li>
                      <router-link
                        to="/course/treatment/lymphatic"
                        class="dropdown-item"
                        :title="routes[3].children[5].meta.title"
                        >{{ routes[3].children[5].meta.title }}</router-link
                      >
                    </li>
                    <li>
                      <router-link
                        to="/course/treatment/facial"
                        class="dropdown-item"
                        :title="routes[3].children[6].meta.title"
                        >{{ routes[3].children[6].meta.title }}</router-link
                      >
                    </li>
                    <li>
                      <router-link
                        to="/course/treatment/pregnancy"
                        class="dropdown-item"
                        :title="routes[3].children[7].meta.title"
                        >{{ routes[3].children[7].meta.title }}</router-link
                      >
                    </li>
                    <li>
                      <router-link
                        to="/course/treatment/myofascial"
                        class="dropdown-item"
                        :title="routes[3].children[8].meta.title"
                        >{{ routes[3].children[8].meta.title }}</router-link
                      >
                    </li>
                    <li>
                      <router-link
                        to="/course/treatment/swedish"
                        class="dropdown-item"
                        :title="routes[3].children[9].meta.title"
                        >{{ routes[3].children[9].meta.title }}</router-link
                      >
                    </li>
                    <li>
                      <router-link
                        to="/course/treatment/meridian"
                        class="dropdown-item"
                        :title="routes[3].children[10].meta.title"
                        >{{ routes[3].children[10].meta.title }}</router-link
                      >
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <router-link
                to="/online-course/elementary-video"
                :title="routes[4].meta.title"
                class="nav-link dropdown-toggle"
                id="navbarDropdownMenuLink"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                >{{ routes[4].meta.title }}</router-link
              >
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li>
                  <router-link
                    to="/online-course/elementary-video"
                    class="dropdown-item"
                    :title="routes[4].children[0].meta.title"
                    >{{ routes[4].children[0].meta.title }}</router-link
                  >
                </li>
                <li>
                  <router-link
                    to="/online-course/elementary-audio"
                    class="dropdown-item"
                    :title="routes[4].children[1].meta.title"
                    >{{ routes[4].children[1].meta.title }}</router-link
                  >
                </li>
                <li>
                  <router-link
                    to="/online-course/intermediate-video"
                    class="dropdown-item"
                    :title="routes[4].children[2].meta.title"
                    >{{ routes[4].children[2].meta.title }}</router-link
                  >
                </li>
                <li>
                  <router-link
                    to="/online-course/all-audio"
                    class="dropdown-item"
                    :title="routes[4].children[3].meta.title"
                    >{{ routes[4].children[3].meta.title }}</router-link
                  >
                </li>
                <li>
                  <router-link
                    to="/online-course/all-video"
                    class="dropdown-item"
                    :title="routes[4].children[4].meta.title"
                    >{{ routes[4].children[4].meta.title }}</router-link
                  >
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <router-link to="/presentation" class="nav-link">香氣發表會</router-link>
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
                  <router-link to="/blog/category/all" class="dropdown-item">所有文章</router-link>
                </li>
                <li v-for="blogCategory in bolgCategories" :key="blogCategory.id">
                  <router-link :to="`/blog/category/${blogCategory.id}`" class="dropdown-item">
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
          <template v-if="!isLogin">
            <div class="action">
              <a href="#" class="nav-link">登入</a>
              <a href="#" class="nav-link border">註冊</a>
            </div>
          </template>
          <template v-else>
            <div class="action">
              <a href="#" class="nav-link">{{ username }}</a>
              <span class="divider">|</span>
              <a href="#" class="nav-link"><i class="fas fa-sign-out-alt"></i></a>
            </div>
          </template>
        </div>
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
    buttonNavbars: null,
    username: "測試人員",
    isLogin: false,
  }),
  created() {
    this.getBlogCategories();
  },
  mounted() {
    this.buttonNavbars = document.querySelectorAll("#navbarNavDropdown a");
    let this_ = this;
    this.buttonNavbars.forEach(function (buttonNavbar) {
      buttonNavbar.addEventListener("click", this_.toggleNavDropdown);
    });
  },
  destroyed() {
    this.buttonNavbars.forEach(function (buttonNavbar) {
      buttonNavbar.removeEventListener("click", this_.toggleNavDropdown);
    });
  },
  methods: {
    getBlogCategories() {
      BlogCategory.getList().then((response) => {
        this.bolgCategories = response;
      });
    },
    toggleNavDropdown() {
      document.getElementById("navbarNavDropdown").classList.remove("show");
    },
  },
};
</script>