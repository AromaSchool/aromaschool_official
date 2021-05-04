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
            <router-link
              to="/news/category/all"
              :title="routes[2].meta.title"
              class="nav-link"
              >{{ routes[2].meta.title }}</router-link
            >
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
              <li>
                <div class="dropdown-item">網路學苑</div>
                <ul class="dropdown-submenu">
                  <li>
                    <router-link
                      to="/course/online/elementary"
                      class="dropdown-item"
                      :title="routes[3].children[11].meta.title"
                      >{{ routes[3].children[11].meta.title }}</router-link
                    >
                  </li>
                  <li>
                    <router-link
                      to="/course/online/intermediate"
                      class="dropdown-item"
                      :title="routes[3].children[12].meta.title"
                      >{{ routes[3].children[12].meta.title }}</router-link
                    >
                  </li>
                  <li>
                    <router-link
                      to="/course/online/all"
                      class="dropdown-item"
                      :title="routes[3].children[13].meta.title"
                      >{{ routes[3].children[13].meta.title }}</router-link
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