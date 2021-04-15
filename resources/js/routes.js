import VueRouter from "vue-router";

// Admin pages
import {
    NotFound,
    ServerError
} from "@/views/error";
import Home from "../views/Home.vue";
import About from "../views/About.vue";
import Brand from "../views/about/Brand.vue";
import Event from "../views/about/Event.vue";
import EventList from "../views/about/EventList.vue";
import EventArticle from "../views/about/EventArticle.vue";
import InterCert from "../views/about/InterCert.vue";
import CertNAHAbout from "../views/about/CertNAHAbout.vue";
import CertNAHATarget from "../views/about/CertNAHATarget.vue";
import CertNAHAHistory from "../views/about/CertNAHAHistory.vue";
import CertNAHAMoral from "../views/about/CertNAHAMoral.vue";
import CertNAHATraining from "../views/about/CertNAHATraining.vue";
import CertNAHAHowToBecome from "../views/about/CertNAHAHowToBecome.vue";
import CertIFPAbout from "../views/about/CertIFPAbout.vue";
import TeamMember from "../views/about/TeamMember.vue";
import News from "../views/News.vue";
import NewsList from "../views/news/NewsList.vue";
import NewsDetail from "../views/news/NewsDetail.vue";
import Presentation from "../views/Presentation.vue";
import Blog from "../views/Blog.vue";
import BlogList from "../views/blog/BlogList.vue";
import BlogDetail from "../views/blog/BlogDetail.vue";
import Contact from "../views/Contact.vue";
import ComingSoon from "../views/component/ComingSoon.vue";

const routes = [{
        path: "/",
        name: "home",
        component: Home,
        meta: {
            title: "提供完整專業的芳療精油知識養成"
        },
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
                meta: {
                    title: "大事紀"
                },
                children: [{
                        path: '',
                        name: "eventList",
                        component: EventList,
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
                path: 'interCert',
                redirect: 'interCert/NAHA/about',
                name: "interCert",
                component: InterCert,
                meta: {
                    title: "國際認證"
                },
                children: [{
                    path: 'NAHA/about',
                    name: "CertNAHAbout",
                    component: CertNAHAbout,
                    meta: {
                        title: "關於NAHA"
                    }
                }, {
                    path: 'NAHA/target',
                    name: "CertNAHATarget",
                    component: CertNAHATarget,
                    meta: {
                        title: "NAHA的使命、願景、目標"
                    },
                }, {
                    path: 'NAHA/history',
                    name: "CertNAHAHistory",
                    component: CertNAHAHistory,
                    meta: {
                        title: "NAHA的歷史"
                    },
                }, {
                    path: 'NAHA/moral',
                    name: "CertNAHAMoral",
                    component: CertNAHAMoral,
                    meta: {
                        title: "NAHA的道德規範標準"
                    },
                }, {
                    path: 'NAHA/training',
                    name: "CertNAHATraining",
                    component: CertNAHATraining,
                    meta: {
                        title: "NAHA美國國家芳療師訓練標準"
                    },
                }, {
                    path: 'NAHA/howToBecome',
                    name: "CertNAHAHowToBecome",
                    component: CertNAHAHowToBecome,
                    meta: {
                        title: "如何成為NAHA美國國家芳療師協會認可的芳療學校"
                    },
                }, {
                    path: 'IFPA/about',
                    name: "CertIFPAbout",
                    component: CertIFPAbout,
                    meta: {
                        title: "關於IFPA"
                    }
                }, ]
            },
            {
                path: 'teamMember',
                name: "teamMember",
                component: TeamMember,
                meta: {
                    title: "師資陣容"
                },
                children: [{
                    path: ':id(\\d+)',
                    meta: {
                        title: "師資陣容標題"
                    }
                }, ]
            },
        ]
    },
    {
        path: "/news",
        name: "news",
        component: News,
        meta: {
            title: "最新消息",
            titleEn: "NEWS",
            bannerImage: "images/banner-2.jpg"
        },
        children: [{
                path: 'category/all',
                name: "newsAll",
                component: NewsList,
                meta: {
                    title: "所有公告"
                },
            },
            {
                path: 'category/:id(\\d+)',
                name: "newsCategory",
                component: NewsList,
                meta: {
                    title: ""
                },
            },
            {
                path: ':id(\\d+)',
                name: "newsDetail",
                component: NewsDetail,
                meta: {
                    title: ""
                },
            },
        ]
    },
    {
        path: "/presentation",
        name: "presentation",
        component: ComingSoon,
        meta: {
            title: "香氣發表會",
            titleEn: "PRESENTATION",
            bannerImage: "images/banner-5.jpg"
        },
    },
    {
        path: "/blog",
        name: "blog",
        component: Blog,
        meta: {
            title: "學苑周刊",
            titleEn: "BLOG",
            bannerImage: "images/banner-4.jpg"
        },
        children: [{
                path: 'category/all',
                name: "blogAll",
                component: BlogList,
                meta: {
                    title: "所有文章"
                },
            },
            {
                path: 'category/:id(\\d+)',
                name: "blogCategory",
                component: BlogList,
                meta: {
                    title: ""
                },
            },
            {
                path: ':id(\\d+)',
                name: "blogDetail",
                component: BlogDetail,
                meta: {
                    title: ""
                },
            },
        ]
    },
    {
        path: "/contact",
        name: "contact",
        component: Contact,
        meta: {
            title: "聯絡我們",
            titleEn: "CONTACT",
            bannerImage: "images/banner-3.jpg"
        },
    },
    {
        path: "/404",
        component: NotFound,
    },
    {
        path: "/500",
        component: ServerError,
    },
    {
        path: "*",
        redirect: "/"
    }
];
const router = new VueRouter({
    mode: "history",
    routes: routes,
    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition
        } else {
            return {
                x: 0,
                y: 0
            }
        }
    }
})

export {
    routes,
    router
}
