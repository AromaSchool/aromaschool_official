import client from "./api";

class QuestionCategory {
    constructor({
        id,
        name,
    } = {}) {
        this.id = id;
        this.name = name;
    }

    static async getList() {
        return client.get('/questions/categories').then(response => {
            if (response.data) {
                return response.data.map(item => {
                    return new QuestionCategory(item);
                });
            }
        })
    }
}

class Question {
    constructor({
        id,
        categoryId,
        question,
        answer,
    } = {}) {
        this.id = id;
        this.category = categoryId ? new QuestionCategory({
            id: categoryId
        }) : {};
        this.question = question;
        this.answer = answer;
    }

    static async getList(categoryId) {
        return client.get('questions', {
            categoryId: categoryId,
        }).then(response => {
            if (response.data) {
                return response.data.map(item => {
                    return new Question(item);
                });
            }
            return [];
        })
    }
}

export {
    QuestionCategory,
    Question,
}
