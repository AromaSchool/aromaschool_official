import client from "./api";

class News {
    constructor({
        id = null,
        title,
        content = null,
        created_at,
        visible = true,
        category,
    } = {}) {
        this.id = id;
        this.title = title;
        this.content = content;
        this.created_at = created_at;
        this.visible = visible;
        this.category = category;
    }

    static async get(id) {
        return client.get(`/news/${id}`).then(response => {
            const item = response.data;
            return new News({
                id: item.id,
                title: item.title,
                content: item.content,
                created_at: item.created_at,
                visible: item.visible,
                category: item.category.id,
            });
        });
    }
    static async getList({
        lastIndex = null,
        limit = 30,
        orderBy = "created_at",
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
                category_id: category,
            })
            .then(response => {
                return {
                    lastIndex: response.data.lastIndex,
                    list: response.data.list.map(item => {
                        return new News({
                            id: item.id,
                            title: item.title,
                            created_at: item.created_at,
                            visible: item.visible,
                            category: item.category.id,
                        });
                    })
                };
            });
    }
    static async getCategories() {
        return client.get("/news/categories").then(response => {
            return response.data;
        });
    }
    async new() {
        return client
            .post("/news", {
                title: this.title,
                content: this.content,
                created_at: this.created_at,
                category_id: this.category,
            })
            .then(response => {
                this.id = response.data.id;
                return this;
            });
    }
    async update() {
        return client.put(`/news/${this.id}`, {
            title: this.title,
            content: this.content,
            created_at: this.created_at,
            category_id: this.category,
        });
    }
    async updateVisible() {
        return client.put(`/news/${this.id}/visible`, {
            visible: this.visible
        })
    }
    async delete() {
        return client.delete(`/news/${this.id}`);
    }
}

export default News;
