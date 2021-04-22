import {
    VueReCaptcha
} from 'vue-recaptcha-v3'

export default {
    install(Vue) {
        Vue.use(VueReCaptcha, {
            siteKey: process.env.MIX_RECAPTCHA_SITE_KEY
        })
    }
}
