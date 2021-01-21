document.getElementById("openRegister").addEventListener("click", openRegister);
document.getElementById("openLogin").addEventListener("click", openLogin);
document.getElementById("inputRegisterPasswordRepeat").addEventListener("input", checkPasswords);

function openRegister(){
    document.getElementById("loginFormWrapper").style.display = "none";
    document.getElementById("registerFormWrapper").style.display = "block";
}

function openLogin(){
    document.getElementById("loginFormWrapper").style.display = "block";
    document.getElementById("registerFormWrapper").style.display = "none";
}

function checkPasswords(event){
    var passwordRepeat = event.target.value;
    var password = document.getElementById("inputRegisterPassword").value;
    
    if(passwordRepeat !== password){
        event.target.style.backgroundColor = "red";
    }else{
        event.target.style.backgroundColor = "white";
    }
}