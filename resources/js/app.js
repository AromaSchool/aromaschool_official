import "./bootstrap";
import "bootstrap";
import Vue from "vue";
import VueRouter from "vue-router";
// import { BootstrapVue, IconsPlugin } from "bootstrap-vue";

Vue.use(VueRouter);
// Make BootstrapVue available throughout your project
// Vue.use(BootstrapVue);
// Optionally install the BootstrapVue icon components plugin
// Vue.use(IconsPlugin);

import App from "../views/App.vue";
import Hello from "../views/Hello.vue";
import Home from "../views/Home.vue";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home,
        },
        {
            path: "/hello",
            name: "hello",
            component: Hello,
        },
    ],
});

new Vue({
    router,
    render: (h) => h(App),
}).$mount("#app");
