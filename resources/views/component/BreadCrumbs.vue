<template>
  <section class="breadcrumbs" v-if="$route.name != 'home'">
    <div class="container">
      <nav style="--bs-breadcrumb-divider: '>'" aria-label="breadcrumb">
        <ol class="breadcrumb justify-content-end">
          <li class="breadcrumb-item"><a href="/" title="首頁">HOME</a></li>
          <template v-for="(breadcrumb, index) in breadcrumbs">
            <li
              class="breadcrumb-item"
              :key="breadcrumb.path"
              v-if="index != breadcrumbs.length - 1"
            >
              <router-link
                :to="breadcrumb.path"
                :title="breadcrumb.meta.title"
                >{{ breadcrumb.meta.title }}</router-link
              >
            </li>
            <li
              class="breadcrumb-item active"
              :key="breadcrumb.name"
              aria-current="page"
              v-else
            >
              {{ breadcrumb.meta.title }}
            </li>
          </template>
        </ol>
      </nav>
    </div>
  </section>
</template>

<script>
export default {
  data: () => ({
    breadcrumbs: [],
  }),
  watch: {
    $route: {
      immediate: true,
      deep: true,
      handler(to, from) {
        this.updateBreadCrumbs();
      },
    },
    "$route.meta.title": {
      immediate: true,
      handler() {
        this.updateBreadCrumbs();
      },
    },
  },
  methods: {
    updateBreadCrumbs() {
      this.breadcrumbs = this.$route.matched.filter((matched) => {
        return matched.meta.title;
      });
    },
  },
};
</script>