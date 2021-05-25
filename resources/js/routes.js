import VueRouter from "vue-router";
import {
    COURSES
} from '@/js/api';

const NotFound = () => import( /* webpackChunkName: "/js/error" */ "../views/error/404.vue");
const ServerError = () => import( /* webpackChunkName: "/js/error" */ "../views/error/500.vue");
const Home = () => import( /* webpackPreload: true */ /* webpackChunkName: "/js/home" */ "../views/Home.vue");
const About = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/about" */ "../views/About.vue");
const Brand = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/about" */ "../views/about/Brand.vue");
const Event = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/about" */ "../views/about/Event.vue");
const EventList = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/about" */ "../views/about/EventList.vue");
const EventArticle = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/about" */ "../views/about/EventArticle.vue");
const InterCert = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/about" */ "../views/about/InterCert.vue");
const CertNAHAbout = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/about" */ "../views/about/CertNAHAbout.vue");
const CertNAHATarget = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/about" */ "../views/about/CertNAHATarget.vue");
const CertNAHAHistory = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/about" */ "../views/about/CertNAHAHistory.vue");
const CertNAHAMoral = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/about" */ "../views/about/CertNAHAMoral.vue");
const CertNAHATraining = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/about" */ "../views/about/CertNAHATraining.vue");
const CertNAHAHowToBecome = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/about" */ "../views/about/CertNAHAHowToBecome.vue");
const CertIFPAbout = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/about" */ "../views/about/CertIFPAbout.vue");
const TeamMember = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/about" */ "../views/about/TeamMember.vue");
const News = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/news" */ "../views/News.vue");
const NewsList = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/news" */ "../views/news/NewsList.vue");
const NewsDetail = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/news" */ "../views/news/NewsDetail.vue");
const Blog = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/blog" */ "../views/Blog.vue");
const BlogList = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/blog" */ "../views/blog/BlogList.vue");
const BlogDetail = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/blog" */ "../views/blog/BlogDetail.vue");
const Course = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/course" */ "../views/course/Course.vue")
const CourseSignUp = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/course" */ "../views/course/CourseSignUp.vue")
const CourseFinish = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/course" */ "../views/course/CourseFinish.vue")
const AromatherapyElementary = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/course" */ "../views/course/aromatherapy/AromatherapyElementary.vue")
const AromatherapyIntermediate = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/course" */ "../views/course/aromatherapy/AromatherapyIntermediate.vue")
const AromatherapyAdvanced = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/course" */ "../views/course/aromatherapy/AromatherapyAdvanced.vue")
const AromatherapyClinical = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/course" */ "../views/course/aromatherapy/AromatherapyClinical.vue")
const TreatmentBritish = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/course" */ "../views/course/treatment/TreatmentBritish.vue")
const TreatmentLymphatic = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/course" */ "../views/course/treatment/TreatmentLymphatic.vue")
const TreatmentFacial = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/course" */ "../views/course/treatment/TreatmentFacial.vue")
const TreatmentPregnancy = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/course" */ "../views/course/treatment/TreatmentPregnancy.vue")
const TreatmentMyofascial = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/course" */ "../views/course/treatment/TreatmentMyofascial.vue")
const TreatmentSwedish = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/course" */ "../views/course/treatment/TreatmentSwedish.vue")
const TreatmentMeridian = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/course" */ "../views/course/treatment/TreatmentMeridian.vue")
const OnlineElementary = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/course" */ "../views/course/online/OnlineElementary.vue")
const OnlineIntermediate = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/course" */ "../views/course/online/OnlineIntermediate.vue")
const OnlineAll = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/course" */ "../views/course/online/OnlineAll.vue")
const Contact = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/other" */ "../views/Contact.vue");
const ComingSoon = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/other" */ "../views/component/ComingSoon.vue");
const Presentation = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/other" */ "../views/Presentation.vue");
const PresentationList = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/other" */ "../views/presentation/PresentationList.vue");
const PresentationDetail = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/other" */ "../views/presentation/PresentationDetail.vue");
const Faq = () => import( /* webpackPrefetch: true */ /* webpackChunkName: "/js/other" */ "../views/Faq.vue");

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
                        path: '404',
                        name: "event404",
                        component: NotFound,
                        meta: {
                            title: "大事紀"
                        },
                    }, {
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
                path: 'teamMember/404',
                name: "teamMember404",
                component: NotFound,
                meta: {
                    title: "師資陣容"
                },
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
        redirect: '/news/category/all',
        name: "news",
        component: News,
        meta: {
            title: "最新消息",
            titleEn: "NEWS",
            bannerImage: "images/banner-2.jpg"
        },
        children: [{
                path: 'category/404',
                name: "newsCategory404",
                component: NotFound,
                meta: {
                    title: "最新消息"
                },
            },
            {
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
        path: "/course",
        redirect: '/course/aromatherapy/elementary',
        name: "course",
        component: Course,
        meta: {
            title: "芳療課程",
            titleEn: "COURSE",
            bannerImage: "images/banner-6.jpg"
        },
        children: [{
                path: "/course/aromatherapy/elementary",
                name: "course-aromatherapy-elementary",
                component: AromatherapyElementary,
                meta: {
                    title: "芳香療法認證課程入門班",
                    courseId: COURSES.AROMATHERAPY.ELEMENTARY,
                },
            }, {
                path: "/course/aromatherapy/intermediate",
                name: "course-aromatherapy-intermediate",
                component: AromatherapyIntermediate,
                meta: {
                    title: "芳香療法認證課程中階班",
                    courseId: COURSES.AROMATHERAPY.INTERMEDIATE,
                },
            }, {
                path: "/course/aromatherapy/advanced",
                name: "course-aromatherapy-advanced",
                component: AromatherapyAdvanced,
                meta: {
                    title: "芳香療法認證課程高階班",
                    courseId: COURSES.AROMATHERAPY.ADVANCED,
                },
            }, {
                path: "/course/aromatherapy/clinical",
                name: "course-aromatherapy-clinical",
                component: AromatherapyClinical,
                meta: {
                    title: "臨床芳療師認證課程",
                    courseId: COURSES.AROMATHERAPY.CLINICAL,
                },
            }, {
                path: "/course/treatment/british",
                name: "course-treatment-british",
                component: TreatmentBritish,
                meta: {
                    title: "英式芳療按摩療程",
                    courseId: COURSES.TREATMENT.BRITISH,
                },
            }, {
                path: "/course/treatment/lymphatic",
                name: "course-treatment-lymphatic",
                component: TreatmentLymphatic,
                meta: {
                    title: "淋巴引流按摩療程",
                    courseId: COURSES.TREATMENT.LYMPHATIC,
                },
            }, {
                path: "/course/treatment/facial",
                name: "course-treatment-facial",
                component: TreatmentFacial,
                meta: {
                    title: "顱顏深層按摩療程",
                    courseId: COURSES.TREATMENT.FACIAL,
                },
            }, {
                path: "/course/treatment/pregnancy",
                name: "course-treatment-pregnancy",
                component: TreatmentPregnancy,
                meta: {
                    title: "孕產婦芳療療程",
                    courseId: COURSES.TREATMENT.PREGNANCY,
                },
            }, {
                path: "/course/treatment/myofascial",
                name: "course-treatment-myofascial",
                component: TreatmentMyofascial,
                meta: {
                    title: "肌筋膜系列課程",
                    courseId: COURSES.TREATMENT.MYOFASCIAL,
                },
            }, {
                path: "/course/treatment/swedish",
                name: "course-treatment-swedish",
                component: TreatmentSwedish,
                meta: {
                    title: "瑞典式按摩療程",
                    courseId: COURSES.TREATMENT.SWEDISH,
                },
            }, {
                path: "/course/treatment/meridian",
                name: "course-treatment-meridian",
                component: TreatmentMeridian,
                meta: {
                    title: "經絡按摩療程",
                    courseId: COURSES.TREATMENT.MERIDIAN,
                },
            }, {
                path: "/course/online/elementary",
                name: "course-online-elementary",
                component: OnlineElementary,
                meta: {
                    title: "直播芳療認證課程入門班",
                    courseId: COURSES.ONLINE.ELEMENTARY,
                },
            },
            {
                path: "/course/online/intermediate",
                name: "course-online-intermediate",
                component: OnlineIntermediate,
                meta: {
                    title: "直播芳療認證課程中階班",
                    courseId: COURSES.ONLINE.INTERMEDIATE,
                },
            }, {
                path: "/course/online/all",
                name: "course-online-all",
                component: OnlineAll,
                meta: {
                    title: "線上芳療認證課程全階班",
                    courseId: COURSES.ONLINE.ALL,
                },
            }, {
                path: "/course/signup",
                name: "course-sign-up",
                component: CourseSignUp,
                meta: {
                    title: "線上報名",
                },
            }, {
                path: "/course/finish",
                name: "course-finish",
                component: CourseFinish,
                meta: {
                    title: "報名完成",
                },
            },
        ]
    },
    {
        path: "/presentation",
        redirect: '/presentation/category/all',
        name: "presentation",
        component: ComingSoon,
        meta: {
            title: "香氣發表會",
            titleEn: "PRESENTATION",
            bannerImage: "images/banner-5.jpg"
        },
        children: [{
                path: "category/all",
                name: "presentationAll",
                component: ComingSoon,
                meta: {
                    title: "所有分類"
                }
            },
            {
                path: "category/:id(\\d+)",
                name: "presentationCategory",
                component: PresentationList,
                meta: {
                    title: ""
                },
            },
            {
                path: ":id(\\d+)",
                name: "presentationDetail",
                component: PresentationDetail,
                meta: {
                    title: "學員名稱"
                },
            }
        ]
    },
    {
        path: "/blog",
        redirect: '/blog/category/all',
        name: "blog",
        component: Blog,
        meta: {
            title: "學苑周刊",
            titleEn: "BLOG",
            bannerImage: "images/banner-4.jpg"
        },
        children: [{
                path: 'category/404',
                name: "blogCategory404",
                component: NotFound,
                meta: {
                    title: "學苑周刊"
                },
            },
            {
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
        path: "/faq",
        name: "faq",
        component: ComingSoon,
        meta: {
            title: "常見問題",
            titleEn: "Q&A",
            bannerImage: "images/banner-3.jpg"
        },
    },
    {
        path: "/recruit",
        name: "recruit",
        component: ComingSoon,
        meta: {
            title: "人才招募",
            titleEn: "RECRUIT",
            bannerImage: "images/banner-3.jpg"
        },
    },
    {
        path: "/404",
        component: NotFound,
        meta: {
            bannerImage: "images/banner-7.jpg"
        },
    },
    {
        path: "/500",
        component: ServerError,
        meta: {
            title: "伺服器錯誤回應",
            bannerImage: "images/banner-7.jpg"
        },
    },
    {
        path: "*",
        component: NotFound,
        meta: {
            title: "不存在的頁面",
            bannerImage: "images/banner-7.jpg"
        },
    }
];
const router = new VueRouter({
    mode: "history",
    routes: routes,
    scrollBehavior(to, from, savedPosition) {
        return savedPosition || {
            x: 0,
            y: 0
        }
    }
})

export {
    routes,
    router
}
