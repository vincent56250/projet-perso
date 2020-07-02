//Nom
var nom = document.getElementById('InputNom1');
var missnom1 = document.getElementById('missnom');
var nomValid = /^([a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]{2,})+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]{2,})?$/;
// Pour valider
var formValid = document.getElementById('bouton_envoi');

formValid.addEventListener('click', validation);

function validation(event) {
        //Si le champ est vide
        if (nom.validity.valueMissing) {
                event.preventDefault();
                missnom1.textContent = 'Nom manquant';
                missnom1.style.color = 'orange';
                //Si le format de données est incorrect
        } else if (nomValid.test(nom.value) == false) {
                event.preventDefault();
                missnom1.textContent = 'Format incorrect';
                missnom1.style.color = 'red';

        } else {
                missnom1.textContent = '✔';
                missnom1.style.color = 'green';
        }
}
// Prenom
var prenom = document.getElementById('InputPrenom1');
var missPrenom1 = document.getElementById('missPrenom');
var prenomValid = /^([a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]{2,})+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]{2,})?$/;


formValid.addEventListener('click', validationPrenom);

function validationPrenom(event) {
        //Si le champ est vide
        if (prenom.validity.valueMissing) {
                event.preventDefault();
                missPrenom1.textContent = 'Prénom manquant';
                missPrenom1.style.color = 'orange';
                //Si le format de données est incorrect
        } else if (prenomValid.test(prenom.value) == false) {
                event.preventDefault();
                missPrenom1.textContent = 'Format incorrect';
                missPrenom1.style.color = 'red';

        } else {
                missPrenom1.textContent = '✔';
                missPrenom1.style.color = 'green';
        }
}
//Mail
var mail = document.getElementById('InputEmail2');
var mailError = document.getElementById('mailError');
var mailValid = /^[a-zA-Z-0-9]+@[a-zA-Z-]+\.[a-zA-Z]{2,6}$/;


formValid.addEventListener('click', validationMail);

function validationMail(event) {
        if (mail.validity.valueMissing) {
                event.preventDefault();
                mailError.textContent = 'Mail manquant';
                mailError.style.color = 'orange';
        } else if (mailValid.test(mail.value) == false) {
                event.preventDefault();
                mailError.textContent = 'Format incorrect';
                mailError.style.color = 'red';

        } else {
                mailError.textContent = '✔';
                mailError.style.color = 'green';
        }
}