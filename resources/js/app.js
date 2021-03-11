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
import Brand from "../views/about/Brand.vue";
import Event from "../views/about/Event.vue";
import EventList from "../views/about/EventList.vue";
import EventArticle from "../views/about/EventArticle.vue";
import InterCerti from "../views/about/InterCerti.vue";
import TeamMember from "../views/about/TeamMember.vue";

const router = new VueRouter({
    mode: "history",
    routes: [{
            path: "/",
            name: "home",
            component: Home,
            meta: {
                title: "提供完整專業的芳療精油知識養成"
            },
        },
        {
            path: "/hello",
            name: "hello",
            component: Hello,
        },
        {
            path: "/about",
            redirect: '/about/brand',
            name: "about",
            component: About,
            meta: {
                title: "關於禾場",
                titleEn: "ABOUT",
                bannerImage: "images/banner-1.jpg"
            },
            children: [{
                    path: 'brand',
                    name: "brand",
                    component: Brand,
                    meta: {
                        title: "品牌故事"
                    },
                },
                {
                    path: 'event',
                    name: "event",
                    component: Event,
                    children: [{
                            path: '',
                            name: "eventList",
                            component: EventList,
                            meta: {
                                title: "大事紀"
                            },
                        },
                        {
                            path: '/about/event/:id',
                            name: "eventArticle",
                            component: EventArticle,
                            meta: {
                                title: "文章標題"
                            },
                        },
                    ]
                },
                {
                    path: 'interCerti',
                    name: "interCerti",
                    component: InterCerti,
                    meta: {
                        title: "國際認證"
                    },
                },
                {
                    path: 'teamMember',
                    name: "teamMember",
                    component: TeamMember,
                    meta: {
                        title: "師資陣容"
                    },
                },
            ]
        },
    ],
});

new Vue({
    router,
    render: (h) => h(App),
}).$mount("#app");
