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
    nullsAsUndefineds: false,

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
        console.error(error);
        switch (error.response.status) {
            case 404:
                document.location = "/404";
                break;
            case 500:
                document.location = "/500";
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
        return this._instance.request({
            method: "PUT",
            url: path,
            responseType: "json",
            data: payload
        });
    }

    post(path, payload) {
        return this._instance.request({
            method: "POST",
            url: path,
            responseType: "json",
            data: payload
        });
    }

    delete(path, payload) {
        return this._instance.request({
            method: "DELETE",
            url: path,
            responseType: "json",
            data: payload
        });
    }
}

export default new Client();
