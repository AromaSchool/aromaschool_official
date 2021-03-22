import VueRouter from "vue-router";

// Admin pages
import Home from "../views/Home.vue";
import ContentCenter from "../views/component/ContentCenter.vue";
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
                redirect: 'teamMember/1',
                component: TeamMember,
                meta: {
                    title: "師資陣容"
                },
                children: [{
                    path: ':id',
                    name: "teamMember",
                    component: ContentCenter,
                    meta: {
                        title: "師資陣容標題"
                    }
                }, ]
            },
        ]
    },
    {
        path: "/news",
        redirect: '/news/all',
        name: "news",
        component: News,
        meta: {
            title: "最新消息",
            titleEn: "NEWS",
            bannerImage: "images/banner-2.jpg"
        },
        children: [{
                path: 'all',
                name: "all",
                component: NewsList,
                meta: {
                    title: "所有公告"
                },
            },
            {
                path: 'class',
                name: "class",
                component: NewsList,
                meta: {
                    title: "課程公告"
                },
            },
            {
                path: 'activity',
                name: "activity",
                component: NewsList,
                meta: {
                    title: "活動公告"
                },
            },
            {
                path: 'other',
                name: "other",
                component: NewsList,
                meta: {
                    title: "其他公告"
                },
            },
            {
                path: ':id',
                name: "newsDetail",
                component: NewsDetail,
                meta: {
                    title: "公告標題"
                },
            },
        ]
    },
    {
        path: "*",
        redirect: "/"
    }
];
const router = new VueRouter({
    mode: "history",
    routes: routes
})

export {
    routes,
    router
}
