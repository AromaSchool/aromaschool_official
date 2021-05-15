import client from "./api";
import moment from "moment";

class News {
    constructor({
        id,
        title,
        content,
        createdAt,
        category,
    } = {}) {
        this.id = id;
        this.title = title;
        this.content = content;
        this.createdAt = createdAt ? moment(createdAt).format("YYYY-MM-DD") : null;
        this.category = category ? new NewsCategory(category) : {};
    }

    static async get(id) {
        return client.get(`/news/${id}`).then(response => {
            const item = response.data;
            return response.data ? new News(response.data) : null;
        });
    }

    static async getList({
        lastIndex = null,
        limit = 30,
        orderBy = "createdAt",
        orderDirection = "desc",
        search = null,
        category = null,
    } = {}) {
        return client
            .get("/news", {
                lastIndex: lastIndex,
                limit: limit,
                orderBy: orderBy,
                orderDirection: orderDirection,
                search: search,
                categoryId: category,
            })
            .then(response => {
                return {
                    lastIndex: response.data.lastIndex,
                    list: response.data.list.map(item => {
                        return new News(item);
                    })
                };
            });
    }
}

class NewsCategory {
    constructor({
        id,
        name,
    } = {}) {
        this.id = id;
        this.name = name;
    }

    static async getList() {
        return client.get("/news/categories").then(response => {
            if (response.data) {
                return response.data.map(item => {
                    return new NewsCategory(item)
                });
            }
        });
    }
};

export {
    News,
    NewsCategory
};
