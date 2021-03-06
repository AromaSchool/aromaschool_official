import client from "./api";
import moment from "moment";

class Symptom {
    constructor({
        id,
        name,
        system,
    }) {
        this.id = id;
        this.name = name;
        this.category = system ? new PhysiologicalSystems(system) : {};
    }

    static async get(id) {
        return client.get(`/presentations/symptoms/${id}`).then(response => {
            return new Symptom(response.data);
        })
    }

    static async getList() {
        return client.get('/presentations/symptoms').then(response => {
            return response.data.map(item => {
                return new Symptom(item);
            })
        })
    }
}

class PhysiologicalSystems {
    constructor({
        id,
        name,
    } = {}) {
        this.id = id;
        this.name = `${name}系統`;
    }

    static async getList() {
        return client.get('/presentations/physiological-systems').then(response => {
            return response.data.map(item => {
                return new PhysiologicalSystems(item);
            })
        })
    }
}

class PresentationSemester {
    constructor({
        id,
        semester,
        graduation,
        presentations,
    } = {}) {
        this.id = id;
        this.semester = semester;
        this.graduation = moment(graduation).format('YYYY-MM-DD');
        this.presentations = presentations ? presentations.map(presentation => {
            return new Presentation(presentation);
        }) : [];
    }

    static async getList({
        lastIndex = null,
        limit = 1,
        systemId = null,
    }) {
        return client.get('/presentations', {
            lastIndex: lastIndex,
            limit: limit,
            systemId: systemId,
        }).then(response => {
            return {
                lastIndex: response.data.lastIndex,
                list: response.data.list.map(item => {
                    return new PresentationSemester(item);
                }),
            }
        })
    }
}

class Presentation {
    constructor({
        id,
        title,
        name = "",
        image,
        summary = "",
        content = "",
        participate,
        ppt,
        videos,
        semester,
        symptoms,
        essentialOils,
    } = {}) {
        this.id = id;
        this.title = title;
        this.name = name;
        this.image = image ? image : require('@/image/index/student_default.svg');
        this.summary = summary;
        this.content = content;
        this.participate = participate;
        this.ppt = ppt;
        this.videos = videos ? videos : [];
        this.semester = new PresentationSemester(semester);
        this.symptoms = symptoms ? symptoms.map(symptom => {
            return new Symptom(symptom);
        }) : [];
        this.essentialOils = essentialOils ? essentialOils.map(essentialOil => {
            return new EssentialOil(essentialOil);
        }) : [];
    }

    static async get(id) {
        return client.get(`/presentations/${id}`).then(response => {
            return new Presentation(response.data)
        });
    }
}

class EssentialOil {
    constructor({
        id,
        name,
    } = {}) {
        this.id = id;
        this.name = name;
    }
}

export {
    Symptom,
    PhysiologicalSystems,
    PresentationSemester,
    Presentation,
    EssentialOil,
}
