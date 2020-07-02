function search() {
    document.getElementById('adressList').innerHTML = '';
    let adress = document.getElementById("InputAdress").value;

    fetch("https://api-adresse.data.gouv.fr/search/?q=" + adress).then(function (response) {
            return response.json();

        })
        .then(function (json) {
            console.log(json);
            //  alert(json.features[0].properties.label)
            //document.getElementById("adressList").innerText = json.features[0].properties.label;

            json.features.forEach(function (feature) {
                let li = document.createElement('li');
                li.innerText = feature.properties.label;
                document.getElementById('adressList').appendChild(li);
                // li.onclick = ("adressList").value.innerText("InputAdress");

                li.addEventListener('click', function () {
                    let search = document.getElementById("InputAdress");
                    search.value = li.textContent;
                    adressList.innerHTML = "";

                });
            })
        });
}


function submit() {

    let mail = $("#InputEmail2").val();
    let comment = $("#comment").val();
    let nom = $("#InputNom1").val();
    let prenom = $("#InputPrenom1").val();
    let tel = $("#InputTel").val();
    let adresse = $("#InputAdress").val();
    $.ajax({
            url: "https://slack.com/api/chat.postMessage",
            type: "POST",

            data: {
                "channel": "#bot",
                "text": nom + ' ' + prenom + ': ' + adresse + ' ' + mail + ' ' + tel 
                + ' /  commentaire =>  ' + comment,
                "token": creds.token,
            },

            dataType: 'text',
        })

        .done(function (response) {
            //when it's done
            console.log('bravo')

        }).fail(function (error) {
            //when it fail
            console.log('rater')
        })
}