import client from "./api";

class TeamMember {
    constructor({
        id,
        name,
        title,
        experience,
        image,
        category,
    } = {}) {
        this.id = id;
        this.name = name;
        this.title = title;
        this.experience = experience;
        this.image = image ? image : require('@/image/index/student_default.svg');
        this.category = new TeamMemberCategory(category);
    }

    static async getList() {
        return client.get(`/teachers`).then(response => {
            if (response.data) {
                return response.data.map(item => {
                    return new TeamMember(item);
                });
            }
        });
    }
}

class TeamMemberCategory {
    constructor({
        id,
        name,
    } = {}) {
        this.id = id;
        this.name = name;
    }

    static async getList() {
        return client.get('teachers/categories').then(response => {
            if (response.data) {
                return response.data.map(item => {
                    return new TeamMemberCategory(item);
                });
            }
        });
    }
}

export {
    TeamMember,
    TeamMemberCategory
};
