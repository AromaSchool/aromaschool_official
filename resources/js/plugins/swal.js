import Swal from "sweetalert2";

export default {
    install(Vue) {
        Vue.prototype.$swal = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-primary mr-2",
                cancelButton: "btn btn-secondary"
            },
            buttonsStyling: false
        });
    }
}
