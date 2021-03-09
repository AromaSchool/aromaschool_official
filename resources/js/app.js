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
        },
    ],
});

new Vue({
    router,
    render: (h) => h(App),
}).$mount("#app");
