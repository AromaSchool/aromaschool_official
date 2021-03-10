<template>
  <nav class="navbar fixed-top navbar-expand-lg navbar-light navbar_as">
    <div class="container">
      <a class="navbar-brand" href="/" title="index">
        <img src="@/image/logo.svg" alt="logo" />
      </a>
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
            <a
              class="nav-link dropdown-toggle"
              href="/about"
              title="about"
              id="navbarDropdownMenuLink"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              >關於禾場</a
            >
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="/about/brand">品牌故事</a></li>
              <li>
                <a class="dropdown-item" href="/about/event" title="">大事紀</a>
              </li>
              <li><a class="dropdown-item" href="#" title="">國際認證</a></li>
              <li><a class="dropdown-item" href="#" title="">師資陣容</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" title="">最新消息</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              title=""
              id="navbarDropdownMenuLink"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              >芳療課程</a
            >
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="#" title="">芳療學苑</a>
                <ul class="dropdown-submenu">
                  <li>
                    <a class="dropdown-item" href="#" title=""
                      >芳香療法認證課程入門班</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="#" title=""
                      >芳香療法認證課程中階班</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="#" title=""
                      >芳香療法認證課程高階班</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="#" title=""
                      >臨床芳療師認證課程</a
                    >
                  </li>
                </ul>
              </li>
              <li>
                <a class="dropdown-item" href="#" title="">療程學苑</a>
                <ul class="dropdown-submenu">
                  <li>
                    <a class="dropdown-item" href="#" title=""
                      >英式芳療按摩療程</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="#" title=""
                      >淋巴引流按摩療程</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="#" title=""
                      >顱顏深層按摩療程</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="#" title=""
                      >孕產婦芳療療程</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="#" title=""
                      >肌筋膜系列課程</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="#" title=""
                      >瑞典式按摩療程</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="#" title="">經絡按摩療程</a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" title="">香氣發表會</a>
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              title=""
              id="navbarDropdownMenuLink"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              >學苑周刊</a
            >
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#" title="">禾場記趣</a></li>
              <li><a class="dropdown-item" href="#" title="">學習感言</a></li>
              <li><a class="dropdown-item" href="#" title="">芳療人物</a></li>
              <li><a class="dropdown-item" href="#" title="">教學筆記</a></li>
              <li><a class="dropdown-item" href="#" title="">芳療心語</a></li>
              <li><a class="dropdown-item" href="#" title="">精油相關</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              href="http://ra.aromaharvest.com.tw/index.php"
              target="_blank"
              rel="noreferer noopener"
              >學員專區</a
            >
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              href="https://www.aromaharvest.com/"
              target="_blank"
              rel="noreferer noopener"
              >芳療產品</a
            >
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<!--<style lang="scss">
@import "@/sass/Navbar.scss";
</style>-->
<!--<style lang="scss">
.navbar_as {
  padding: 25px 0;
  background: rgb(255, 255, 255);
  background: linear-gradient(
    0deg,
    rgba(255, 255, 255, 0) 0%,
    rgba(255, 255, 255, 0.7) 30%,
    rgba(255, 255, 255, 0.9) 100%
  );
  .dropdown-menu {
    border: none;
    border-top: solid 3px #c9b5a5;
    border-bottom: solid 3px #c9b5a5;
    border-radius: 0;
    background: rgba(255, 255, 255, 0.9);
    font-size: 15px;
  }
  .dropdown-item {
    color: #707179;
    padding: 8px 20px;
    &:focus {
      background: #f1f1f4;
    }
  }
  .dropdown-submenu {
    list-style: none;
    padding: 0;
    .dropdown-item {
      padding: 8px 30px;
      color: #a18875;
    }
  }
}
.navbar-light {
  .navbar-nav {
    .nav-link {
      font-size: 15px;
      color: #707179;
      padding-left: 25px;
      padding-right: 25px;
    }
  }
}
.dropdown-item {
  &:hover {
    background: #f1f1f4;
  }
}

@media screen and (min-width: 992px) {
  .navbar {
    .nav-item {
      .dropdown-menu {
        display: none;
        margin-top: 0;
      }
      &:hover {
        .dropdown-menu {
          display: block;
        }
      }
    }
  }
  .navbar_as {
    .nav-item + .nav-item {
      &::before {
        content: "/";
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
      }
    }
    .dropdown-toggle {
      &::after {
        content: none;
      }
    }
  }
}

@media screen and (max-width: 992px) {
  .navbar_as {
    .navbar-collapse {
      padding: 10px 0;
      margin: 10px 0;
      background: rgba(255, 255, 255, 0.8);
      border-radius: 0.25rem;
      border: solid 1px rgba(0, 0, 0, 0.1);
      height: calc(100vh - 80px);
      overflow: auto;
    }
    .dropdown-menu {
      margin: 0 15px;
    }
    .dropdown-item {
      padding: 8px 10px;
    }
    .dropdown-submenu {
      .dropdown-item {
        padding: 8px 20px;
      }
    }
  }
}

@media screen and (max-width: 576px) {
  .navbar_as {
    padding: 15px 0;
  }
}
</style>-->