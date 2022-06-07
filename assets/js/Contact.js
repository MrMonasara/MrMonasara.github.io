function sendEmail() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let message = document.getElementById("message").value;
    let subject = document.getElementById("subject").value;
    let finalmessage = `Name : ${name} <br>  Email : ${email} <br>  Message : ${message} <br>`;
    Email.send({
        Host: "smtp.gmail.com",
        Username: "abhupatel122@gmail.com",
        Password: "twduzypyfrhgvqbb",
        To: 'abhupatel122@gmail.com',
        From: "abhupatel122@gmail.com",
        Subject: subject,
        Body: finalmessage
    }).then(
        message => alert(message)
    );
}