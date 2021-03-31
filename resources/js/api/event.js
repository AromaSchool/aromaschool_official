import client from "./api";

class Event {
    constructor({
        id = null,
        title,
        content = null,
        date
    } = {}) {
        this.id = id;
        this.title = title;
        this.content = content;
        this.date = date;
    }

    static async get(id) {
        return client.get(`/events/${id}`).then(response => {
            const item = response.data;
            return new Event({
                id: item.id,
                title: item.title,
                content: item.content,
                date: item.date
            });
        });
    }
    static async getList({
        lastIndex = null,
        limit = 30,
        orderBy = "date",
        orderDirection = "desc",
        search = null
    } = {}) {
        return client
            .get("/events", {
                lastIndex: lastIndex,
                limit: limit,
                orderBy: orderBy,
                orderDirection: orderDirection,
                search: search
            })
            .then(response => {
                return {
                    lastIndex: response.data.lastIndex,
                    list: response.data.list.map(item => {
                        return new Event({
                            id: item.id,
                            title: item.title,
                            date: item.date
                        });
                    })
                };
            });
    }
}

export default Event;
