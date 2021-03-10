<template>
  <section class="breadcrumbs" v-if="this.$route.name != 'home'">
    <div class="container">
      <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-end">
          <li class="breadcrumb-item"><a href="/" title="首頁">HOME</a></li>
          <li class="breadcrumb-item">關於禾場</li>
          <li class="breadcrumb-item active" aria-current="page">
            {{ this.$route.meta.title }}
          </li>
        </ol>
      </nav>
    </div>
  </section>
</template>