import client from "./api";

class Email {
    static async send(
        title,
        content,
        name,
        phone,
        department,
        mail,
    ) {
        return client.post("/mail/contact", {
            title,
            content,
            name,
            phone,
            department,
            mail,
        });
    }
}

export default Email;
