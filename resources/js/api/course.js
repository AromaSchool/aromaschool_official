import client from "./api";
import moment from "moment";
import converter from "number-to-chinese-words";

const COURSES = {
    AROMATHERAPY: {
        ELEMENTARY: 1,
        INTERMEDIATE: 2,
        ADVANCED: 3,
        CLINICAL: 4
    },
    TREATMENT: {
        BRITISH: 5,
        LYMPHATIC: 6,
        FACIAL: 7,
        PREGNANCY: 8,
        MYOFASCIAL: 9,
        SWEDISH: 10,
        MERIDIAN: 11,
    },
    ONLINE: {
        ELEMENTARY: 12,
        INTERMEDIATE: 13,
        ALL: 14,
    },
};

const CLASSROOMS = {
    TAIPEI: 1,
    TAICHUNG: 2,
    HSINCHU: 3,
    TAINAN: 4,
    KAOHSIUNG: 5,
}

class Course {
    constructor({
        id,
        name,
        category,
    } = {}) {
        this.id = id;
        this.name = name;
        this.category = category ? new CourseCategory(category) : {};
    }
}

class CourseCategory {
    constructor({
        id,
        name
    } = {}) {
        this.id = id;
        this.name = name;
    }
}

class CourseClassroom {
    constructor({
        id,
        name
    } = {}) {
        this.id = id;
        this.name = name;
    }
}

class CourseSchedule {
    constructor({
        id,
        name
    } = {}) {
        this.id = id;
        this.name = name;
    }
}

class CourseSetting {
    constructor({
        id,
        startTime,
        endTime,
        weeks,
        teachingHours,
        examinationHours,
        course,
        schedule,
        classroom,
        batches,
    } = {}) {
        this.id = id;
        this.startTime = moment(startTime, 'HH:mm:ss').format('HH:mm');
        this.endTime = moment(endTime, 'HH:mm:ss').format('HH:mm');
        this.weeks = converter.toWords(weeks);
        this.teachingHours = teachingHours;
        this.examinationHours = examinationHours;
        this.course = course ? new Course(course) : null;
        this.schedule = schedule ? new CourseSchedule(schedule) : null;
        this.classroom = classroom ? new CourseClassroom(classroom) : null;
        this.batches = batches ? batches.map(batch => {
            return new CourseBatch(batch)
        }) : null;
    }
}

class CourseBatch {
    constructor({
        id,
        startDate,
        endDate,
        deadline,
        comment,
    } = {}) {
        this.id = id;
        this.startDate = `${startDate} (${moment(startDate).locale('zh-tw').format('dddd').substring(2,3)})`;
        this.endDate = `${endDate} (${moment(endDate).locale('zh-tw').format('dddd').substring(2,3)})`;
        this.deadline = `${deadline} (${moment(deadline).locale('zh-tw').format('dddd').substring(2,3)})`;
        this.comment = comment;
    }

    static async getList({
        courseId,
        classroomId = null,
        scheduleId = null,
    }) {
        return client
            .get("/courses/batches", {
                courseId,
                classroomId,
                scheduleId,
            })
            .then(response => {
                if (response.data) {
                    if ([COURSES.ONLINE.ELEMENTARY, COURSES.ONLINE.INTERMEDIATE, COURSES.ONLINE.ALL].indexOf(courseId) != -1) {
                        return response.data.map(item => {
                            return new CourseBatch(item)
                        });
                    }
                    return response.data.map(item => {
                        return new CourseSetting(item)
                    });
                }
            });
    }
}

class CourseSignUp {
    constructor({
        name,
        phone,
        mail,
        comment,
        courses,
    } = {}) {
        this.name = name;
        this.phone = phone;
        this.mail = mail;
        this.comment = comment;
        this.courses = courses ? courses : [];
    }

    async signUp() {
        return client.post('/courses/signup', {
            name: this.name,
            phone: this.phone,
            mail: this.mail,
            comment: this.comment,
            courses: this.courses,
        })
    }
}

export {
    COURSES,
    CLASSROOMS,
    Course,
    CourseCategory,
    CourseClassroom,
    CourseSchedule,
    CourseSetting,
    CourseBatch,
    CourseSignUp,
};
