import client from "./api";

class Blog {
    constructor({
        id,
        title,
        content,
        image,
        authorName,
        authorImage,
        authorBio,
        category,
        createdAt,
        keywords = [],
    } = {}) {
        this.id = id;
        this.title = title;
        this.content = content;
        this.image = image ? image : require("@/image/blog/blog_default.svg");
        this.authorName = authorName;
        this.authorImage = authorImage ? authorImage : require('@/image/index/student_default.svg');
        this.authorBio = authorBio;
        this.category = category ? new BlogCategory(category) : nul;
        this.keywords = keywords.map(keyword => {
            return new BlogKeyword(keyword)
        });
        this.createdAt = createdAt;
    }

    static async get(id) {
        return client.get(`/articles/${id}`).then(response => {
            return new Blog(response.data);
        });
    }

    static async getList({
        lastIndex = null,
        limit = 16,
        orderBy = "createdAt",
        orderDirection = "desc",
        search = null,
        category = null,
        keyword = null,
    } = {}) {
        return client
            .get("/articles", {
                lastIndex: lastIndex,
                limit: limit,
                orderBy: orderBy,
                orderDirection: orderDirection,
                search: search,
                categoryId: category,
                keywordId: keyword,
            })
            .then(response => {
                return {
                    lastIndex: response.data.lastIndex,
                    list: response.data.list.map(item => {
                        return new Blog(item);
                    })
                };
            });
    }

    async hit() {
        return client.put(`/articles/${this.id}/hit`);
    }
}

class BlogKeyword {
    constructor({
        id,
        name,
    } = {}) {
        this.id = id;
        this.name = name;
    }

    static async getList() {
        return client.get("/articles/keywords").then(response => {
            return response.data.map(keyword => {
                return new BlogKeyword(keyword)
            });
        });
    }
};

class BlogCategory {
    constructor({
        id,
        name,
    } = {}) {
        this.id = id;
        this.name = name;
    }

    static async getList() {
        return client.get("/articles/categories").then(response => {
            return response.data.map(category => {
                return new BlogCategory(category)
            });
        });
    }
};

export {
    Blog,
    BlogKeyword,
    BlogCategory,
};
