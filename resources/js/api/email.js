import client from "./api";

class Email {
    static async send(
        title,
        content,
        name,
        phone,
        department,
        mail,
        recaptcha
    ) {
        return client.post("/mail/contact", {
            title: title,
            content: content,
            name: name,
            phone: phone,
            department: department,
            mail: mail,
            recaptcha: recaptcha,
        });
    }
}

export default Email;
