import InfiniteLoading from 'vue-infinite-loading';

export default {
    install(Vue) {
        Vue.use(InfiniteLoading, {
            props: {
                spinner: "spiral"
            },
            slots: {
                noMore: "",
                noResults: "暫無資料",
            },
        });
    }
}
