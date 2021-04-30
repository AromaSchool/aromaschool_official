import {
    serialize
} from "object-to-formdata";
import axios from "axios";
import Qs from "qs";

const options = {
    /**
     * include array indices in FormData keys
     * defaults to false
     */
    indices: false,

    /**
     * treat null values like undefined values and ignore them
     * defaults to false
     */
    nullsAsUndefineds: true,

    /**
     * convert true or false to 1 or 0 respectively
     * defaults to false
     */
    booleansAsIntegers: true,

    /**
     * store arrays even if they're empty
     * defaults to false
     */
    allowEmptyArrays: false
};

class Client {
    constructor() {
        let _instance = axios.create({
            baseURL: `${window.location.origin}/api`,
            withCredentials: true,
            paramsSerializer: params => {
                // remove empty value entries
                params = Object.fromEntries(Object.entries(params).filter(([k, v]) => v));
                return Qs.stringify(params);
            }
        });
        _instance.interceptors.response.use(
            this.handleSuccess,
            this.handleError
        );
        this._instance = _instance;
    }

    handleSuccess(response) {
        return response;
    }

    handleError(error) {
        switch (error.response.status) {
            case 404:
                document.location = "/404";
                break;
            case 429:
                Swal.fire({
                    title: "警告",
                    text: "頻繁操作，稍後再試",
                    icon: "warning",
                    timer: 2000,
                    showConfirmButton: false,
                });
                break;
            case 500:
                console.error(error);
                Swal.fire({
                    title: "錯誤",
                    text: "系統發生錯誤",
                    icon: "error",
                    timer: 2000,
                    showConfirmButton: false,
                }).then(() => {
                    document.location = "/500";
                });
                break;
        }
        return Promise.reject(error);
    }

    get(path, payload) {
        return this._instance.request({
            method: "GET",
            url: path,
            responseType: "json",
            params: payload
        });
    }

    put(path, payload) {
        // note: https://stackoverflow.com/questions/50691938/patch-and-put-request-does-not-working-with-form-data
        return this._instance.request({
            method: "POST",
            url: `${path}?_method=PUT`,
            responseType: "json",
            data: serialize(payload, options)
        });
    }

    post(path, payload) {
        return this._instance.request({
            method: "POST",
            url: path,
            responseType: "json",
            data: serialize(payload, options)
        });
    }

    delete(path, payload) {
        return this._instance.request({
            method: "DELETE",
            url: path,
            responseType: "json",
            data: serialize(payload, options)
        });
    }
}

export default new Client();
