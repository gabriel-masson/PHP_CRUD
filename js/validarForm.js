const email = document.querySelector("#email");
const idade = document.querySelector("#idade");

function validarEmail(){
    
    const regexEmail = /[a-z0-9.]@(gmail\.com|hotmail\.com|upe\.br)$/;
    const emailOk = regexEmail.test(email.value);
    if(!emailOk){
        alert("informe um email valido");
    } 
}
function validarIdade(){
    //se for um numero é falso
    if(isNaN(idade.value)){
        alert("Informe apenas numero na idade");
    }
}

email.addEventListener("blur",validarEmail);
idade.addEventListener("blur",validarIdade);
