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
        keywords,
    } = {}) {
        this.id = id;
        this.title = title;
        this.content = content;
        this.image = image;
        this.authorName = authorName;
        this.authorImage = authorImage;
        this.authorBio = authorBio;
        this.category = category;
        this.keywords = keywords;
        this.createdAt = createdAt;
    }

    static async get(id) {
        return client.get(`/articles/${id}`).then(response => {
            const item = response.data;
            return new Blog({
                id: item.id,
                title: item.title,
                content: item.content,
                image: item.image ? item.image : require("@/image/blog/blog_default.svg"),
                authorName: item.authorName,
                authorImage: item.authorImage ? item.authorImage : require('@/image/index/student_default.svg'),
                authorBio: item.authorBio,
                category: new BlogCategory(item.category),
                keywords: item.keywords.map(keyword => {
                    return new BlogKeyword(keyword)
                }),
                createdAt: item.createdAt,
            });
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
                        return new Blog({
                            id: item.id,
                            title: item.title,
                            content: item.content,
                            createdAt: item.createdAt,
                            image: item.image ? item.image : require("@/image/blog/blog_default.svg"),
                            category: new BlogCategory(item.category),
                        });
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
