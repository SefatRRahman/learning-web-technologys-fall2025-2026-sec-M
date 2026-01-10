document.addEventListener("DOMContentLoaded", function(){

    const form = document.getElementById("calcForm");
    const num1 = document.getElementById("num1");
    const num2 = document.getElementById("num2");
    const op = document.getElementById("op");
    const errorMsg = document.getElementById("errorMsg");

    form.addEventListener("submit", function(e){

        errorMsg.innerHTML = "";

        if(num1.value.trim()=="" || num2.value.trim()==""){
            e.preventDefault();
            errorMsg.innerHTML = "Both numbers required";
            return;
        }

        if(isNaN(num1.value) || isNaN(num2.value)){
            e.preventDefault();
            errorMsg.innerHTML = "Only numeric values allowed";
            return;
        }

        if(op.value==""){
            e.preventDefault();
            errorMsg.innerHTML = "Select an operation";
            return;
        }
    });
});
