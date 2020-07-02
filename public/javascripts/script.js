

var myInput = document.getElementById("psw")
var letter = document.getElementById("letter")
var capital = document.getElementById("capital")
var number = document.getElementById("number")
var length = document.getElementById("length")



myInput.onfocus = function () {
    document.getElementById("message").style.display = "block"
}


myInput.onblur = function () {
    document.getElementById("message").style.display = "none"
}



myInput.onkeyup = function () {
        // Validation minuscule
        var lowerCaseLetters = /[a-z]/g
        if (myInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid")
            letter.classList.add("valid")
        } 
        else {
            letter.classList.remove("valid")
            letter.classList.add("invalid")
        }

        // validation lettre capitale
        var upperCaseLetters = /[A-Z]/g;
        if (myInput.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid")
            capital.classList.add("valid")
        } 
        else {
            capital.classList.remove("valid")
            capital.classList.add("invalid")
        }

        // Validation d'un chiffre
        var numbers = /[0-9]/g;
        if (myInput.value.match(numbers)) {
            number.classList.remove("invalid")
            number.classList.add("valid")
        } 
        else {
            number.classList.remove("valid")
            number.classList.add("invalid")
        }

        // Validation nombre caractères
        if (myInput.value.length >= 8) {
            length.classList.remove("invalid")
            length.classList.add("valid")
        } 
        else {
            length.classList.remove("valid")
            length.classList.add("invalid")
        }
    } 
    

   

    








