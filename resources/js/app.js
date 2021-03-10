import "./bootstrap";
import "bootstrap";
import "@fortawesome/fontawesome-free/css/all.css";
// import 'animate.css';
// import WOW from 'wowjs';
import Vue from "vue";
import VueRouter from "vue-router";

// new WOW({ live: false }).init();

Vue.use(VueRouter);

import App from "../views/App.vue";
import Home from "../views/Home.vue";
import Hello from "../views/Hello.vue";
import About from "../views/About.vue";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home,
            meta: { title: "提供完整專業的芳療精油知識養成" },
        },
        {
            path: "/hello",
            name: "hello",
            component: Hello,
        },
        {
            path: "/about",
            name: "about",
            component: About,
            meta: { title: "關於禾場",
                    bannerImage: "images/banner-1.jpg" },
        },
    ],
});

new Vue({
    router,
    render: (h) => h(App),
}).$mount("#app");
