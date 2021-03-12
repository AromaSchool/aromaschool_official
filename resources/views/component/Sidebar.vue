<template>
  <section class="sidebar accordion">
    <div class="accordion-item" id="accordionExample">
      <h2 class="accordion-header" id="headingOne">
        <button
          class="accordion-button"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapseOne"
          aria-expanded="true"
          aria-controls="collapseOne"
        >
          NAHA
        </button>
      </h2>
      <div
        id="collapseOne"
        class="accordion-collapse collapse show"
        aria-labelledby="headingOne"
        data-bs-parent="#accordionExample"
      >
        <div class="accordion-body">
          <ul>
            <li class="sidebar_list">
              <router-link to="/about/interCert" title="關於NAHA"
                >關於NAHA</router-link
              >
            </li>
            <li class="sidebar_list">
              <router-link to="/about/interCert" title="NAHA的使命、願景、目標"
                >NAHA的使命、願景、目標</router-link
              >
            </li>
            <li class="sidebar_list">
              <router-link to="/about/interCert" title="NAHA的歷史"
                >NAHA的歷史</router-link
              >
            </li>
            <li class="sidebar_list">
              <router-link to="/about/interCert" title="NAHA的道德規範標準"
                >NAHA的道德規範標準</router-link
              >
            </li>
            <li class="sidebar_list">
              <router-link to="/about/interCert" title="美國國家芳療師訓練標準"
                >美國國家芳療師訓練標準</router-link
              >
            </li>
            <li class="sidebar_list">
              <router-link
                to="/about/interCert"
                title="如何成為NAHA美國國家芳療師協會認可的芳療學校"
                >如何成為NAHA美國國家芳療師協會認可的芳療學校</router-link
              >
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button
          class="accordion-button collapsed"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapseTwo"
          aria-expanded="false"
          aria-controls="collapseTwo"
        >
          IFPA
        </button>
      </h2>
      <div
        id="collapseTwo"
        class="accordion-collapse collapse"
        aria-labelledby="headingTwo"
        data-bs-parent="#accordionExample"
      >
        <div class="accordion-body">
          <ul>
            <li class="sidebar_list">
              <router-link to="/about/interCert" title="關於IFPA"
                >關於IFPA</router-link
              >
            </li>
            <li class="sidebar_list">
              <router-link to="/about/interCert" title="IFPA的使命、願景、目標"
                >IFPA的使命、願景、目標</router-link
              >
            </li>
            <li class="sidebar_list">
              <router-link to="/about/interCert" title="IFPA的歷史"
                >IFPA的歷史</router-link
              >
            </li>
            <li class="sidebar_list">
              <router-link to="/about/interCert" title="IFPA的道德規範標準"
                >IFPA的道德規範標準</router-link
              >
            </li>
            <li class="sidebar_list">
              <router-link to="/about/interCert" title="英國國家芳療師訓練標準"
                >英國國家芳療師訓練標準</router-link
              >
            </li>
            <li class="sidebar_list">
              <router-link
                to="/about/interCert"
                title="如何成為IFPA英國國家芳療師協會認可的芳療學校"
                >如何成為IFPA英國國家芳療師協會認可的芳療學校</router-link
              >
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
</template>