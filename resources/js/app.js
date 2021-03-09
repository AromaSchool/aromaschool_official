import "./bootstrap";
import "bootstrap";
import "@fortawesome/fontawesome-free/css/all.css";
import animate from 'animate.css';
import Vue from "vue";
import VueRouter from "vue-router";

Vue.use(animate);
Vue.use(VueRouter);

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
