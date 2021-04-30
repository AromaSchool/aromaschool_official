import client from "./api";

class Event {
    constructor({
        id,
        title,
        content,
        date
    } = {}) {
        this.id = id;
        this.title = title;
        this.content = content;
        this.date = date;
    }

    static async get(id) {
        return client.get(`/events/${id}`).then(response => {
            return new Event(response.data);
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
                        return new Event(item);
                    })
                };
            });
    }
}

export default Event;
