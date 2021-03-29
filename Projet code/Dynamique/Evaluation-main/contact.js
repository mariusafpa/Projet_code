// --------------Variables apellé pour le formulaire -----------
const white = document.getElementById("reset");
const validation = document.getElementById("submit");
const firstName = document.getElementById("firstname");
const userName = document.getElementById("name");
const postal = document.getElementById("postaldud");
const mail = document.getElementById("mail");

//---------------Variables error(messages et changement)-----------------------


const error = document.getElementById("error");
const error1 = document.getElementById("error1");
const errorPostal = document.getElementById("errorPostal");
const errorMail = document.getElementById("errormail");



//--------------Variables regex !-------------------------------------
const regexAlpha = /[a-zA-Z]+/;
const regexPostal = /^(([0-8][0-9])|(9[0-5]))[0-9]{3}$/;
const regexEmail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;








//-----------------function validation et check error------------------------

validation.addEventListener("click", envoie)

function envoie(e) {

    if (!regexAlpha.test(firstName.value)) { // si différent de la regex on applique l'erreur et le changement de style
        error.innerHTML = "Please, enter your first name"; //message erreur 
        firstName.style.border = "2px solid red"; // changement de style
        e.preventDefault() // on stop le fonctionnement par défault
    } else { //sinon 
        firstName.style.border = "2px solid green"; // on change le style en validation (vert).
        error.innerHTML = ""; // on efface le message d'erreur
    };
    // nouvelle verification 
    if (!regexAlpha.test(userName.value)) {
        error1.innerHTML = "Please, enter a Name";
        userName.style.border = "2px solid red";
        e.preventDefault()
    } else {
        userName.style.border = "2px solid green";
        error1.innerHTML = "";
    };

    //Verification code postal(fr)

    if (!regexPostal.test(postal.value)) {
        errorPostal.innerHTML = "Please, enter a validate postal code";
        postal.style.border = "2px solid red";
        e.preventDefault()
    } else {
        postal.style.border = "2px solid green";
        errorPostal.innerHTML = "";
    };

    if (!regexEmail.test(mail.value)) {
        errorMail.innerHTML = "Please, enter a validate Email";
        mail.style.border = "2px solid red";
        e.preventDefault()
    } else {
        mail.style.border = "2px solid green";
        errorMail.innerHTML = "";
    };

}


//-------------------Function reset---------------------
//Enlève toutes les modifications apporté si l'utilisateur lance annuler

white.addEventListener('click', reset)

function reset() {

    firstName.style.border = "";
    error.innerHTML = "";

    userName.style.border = "";
    error1.innerHTML = "";

    postal.style.border = "";
    errorPostal.innerHTML = "";

    postal.style.border = "";
    errorPostal.innerHTML = "";

    mail.style.border = "";
    errorMail.innerHTML = "";

}