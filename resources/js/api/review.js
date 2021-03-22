import client from "./api";


class Review{
    constructor({
        id,
        image,
        name,
        className,
        semester,
        review,
        graduation
    }) {
        this.id = id;
        this.image = image;
        this.name = name;
        this.class = className;
        this.semester = semester;
        this.review = review;
        this.graduation = graduation;
    }

    static async getList({
        limit = 10,
    } = {}) {
        return client.get('/reviews', {
            limit: limit,
        }).then(response => {
            return response.data.list.map(item => {
                if (!item.image) {
                    item.image = require('@/image/index/student_default.svg')
                }
                return new Review({
                    id: item.id,
                    image: item.image,
                    name: item.name,
                    className: item.class,
                    semester: item.semester,
                    graduation: item.graduation,
                    review: item.review
                })
            })
        });
    }
}

export default Review;