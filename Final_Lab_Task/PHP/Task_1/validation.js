document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById("regForm");
    const name = document.getElementById("name");
    const email = document.getElementById("email");
    const password = document.getElementById("password");
    const confirm = document.getElementById("confirm");
    const errorMsg = document.getElementById("errorMsg");

    form.addEventListener("submit", function (e) {

        errorMsg.innerHTML = "";

        if (username === "") {
            e.preventDefault();
            errorMsg.textContent = "Username cannot be empty.";
            return;
        }

        
        for (let ch of username) {
    const isLetter = (ch >= 'A' && ch <= 'Z') || (ch >= 'a' && ch <= 'z');
    const isNumber = (ch >= '0' && ch <= '9');

    if (!isLetter && !isNumber) {
        e.preventDefault();
        errorMsg.textContent = "Username can only contain letters and numbers.";
        return;
    }
}


        
        if (password.length <6) {
            e.preventDefault();
            errorMsg.textContent = "Password must be at least 6 characters.";
            return;
        }

        
        if (role === "") {
            e.preventDefault();
            errorMsg.textContent = "Please select a role.";
            return;
        }
    });
});
