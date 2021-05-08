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
import {
    Swal,
    reCaptcha
} from "./plugins";
import App from "../views/App.vue";

// new WOW({ live: false }).init();

Vue.use(VueRouter);
Vue.use(Swal);
Vue.use(reCaptcha)

new Vue({
    router,
    render: (h) => h(App),
}).$mount("#app");
