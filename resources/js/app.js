import "./bootstrap";
import "bootstrap";
import "@fortawesome/fontawesome-free/css/all.css";
// import 'animate.css';
// import WOW from 'wowjs';
import Vue from "vue";
import VueRouter from "vue-router";
import {
    router
} from './routes.js'

// new WOW({ live: false }).init();

Vue.use(VueRouter);

import App from "../views/App.vue";

new Vue({
    router,
    render: (h) => h(App),
}).$mount("#app");
