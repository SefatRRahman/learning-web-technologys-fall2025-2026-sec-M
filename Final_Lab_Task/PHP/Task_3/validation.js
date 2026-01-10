document.addEventListener("DOMContentLoaded", function(){

    const form = document.getElementById("contactForm");
    const name = document.getElementById("name");
    const email = document.getElementById("email");
    const subject = document.getElementById("subject");
    const message = document.getElementById("message");
    const errorMsg = document.getElementById("errorMsg");

    form.addEventListener("submit", function(e){

        errorMsg.innerHTML = "";

        if(name.value.trim() === ""){
            e.preventDefault();
            errorMsg.innerHTML = "Name is required";
            return;
        }

        if(email.value.trim() === ""){
            e.preventDefault();
            errorMsg.innerHTML = "Email is required";
            return;
        }

       
        if(email.value.indexOf("@") === -1 || email.value.indexOf(".") === -1){
            e.preventDefault();
            errorMsg.innerHTML = "Invalid email format";
            return;
        }

        if(subject.value === ""){
            e.preventDefault();
            errorMsg.innerHTML = "Select a subject";
            return;
        }

        if(message.value.trim().length < 10){
            e.preventDefault();
            errorMsg.innerHTML = "Message must be at least 10 characters";
            return;
        }
    });
});
