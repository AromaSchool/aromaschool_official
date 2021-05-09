import VueLazyload from 'vue-lazyload'

export default {
    install(Vue) {
        Vue.use(VueLazyload, {
            loading: require('@/image/loading.svg')
        })
    }
}
