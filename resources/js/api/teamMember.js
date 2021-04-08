import client from "./api";

class TeamMember {
    constructor({
        id,
        name,
        title,
        experience,
        image,
        visible = true,
        categoryId = 1,
        categoryName,
    } = {}) {
        this.id = id;
        this.name = name;
        this.title = title;
        this.experience = experience;
        this.image = image;
        this.visible = visible;
        this.categoryId = categoryId;
        this.categoryName = categoryName;
    }

    static async get() {
        return client.get(`/teachers`).then(response => {
            // return response.data;
            return response.data.map(item => {
                if (!item.image) {
                    item.image = require('@/image/index/student_default.svg')
                }
                return new TeamMember({
                    id: item.id,
                    name: item.name,
                    title: item.title,
                    experience: item.experience,
                    image: item.image,
                    visible: item.visible,
                    categoryId: item.category.id,
                    categoryName: item.category.name,
                });
            });

        });
    }

    static async getCategory() {
        return client.get(`/teachers/categories`).then(response => {
            return response.data;
        });
    }
}

export default TeamMember;
