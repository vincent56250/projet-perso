<?php
include_once 'layouts/head.php';
?>

<main class="container">

    <!-- <img src="public/images/images1920/butterfly-1127666_1920.jpg" class="img-attente"> -->
    <div class="formulaire">
        <fieldset class="info">

            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="">Mr
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="">Mme
                </label>
            </div>


            <div class="row">
                <div class="col-xs-12 col-lg-6">
                    <div class="form-group">
                        <label for="usr">Nom:</label>
                        <input type="text" id="InputNom1" class="form-control">
                        <span id="missnom"></span>
                    </div>
                </div>

                <div class="col-xs-12 col-lg-6">
                    <div class="form-group">
                        <label for="usr">Prénom:</label>
                        <input type="text" id="InputPrenom1" class="form-control">
                        <span id="missPrenom"></span>
                    </div>
                </div>
            </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-lg-6">
            <div class="form-group">
                <label for="email">Votre E-mail:</label>
                <input type="text" name="email" id="InputEmail2" class="form-control">
                <span id="mailError"></span>
            </div>
        </div>

        <div class="col-xs-12 col-lg-6">
            <div class="form-group">
                <label for="adress">Votre adresse:</label>
                <input type="text" name="adresse" id="InputAdress" class="form-control" onkeyup="search()">
                <ul id="adressList"></ul>
                <span id="errorAdress"></span>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-xs-12 col-lg-6">
            <div class="form-group">
                <label for="comment">Commentaires:</label>
                <textarea class="form-control" rows="5" id="comment"></textarea>

            </div>
        </div>
        <div class="col-xs-12 col-lg-6">
            <div class="form-group">
                <label for="tel">Votre numero de tel:</label>
                <input type="text" name="tel" id="InputTel" class="form-control">
                <span id="errorTel"></span>
                <br><br>
                <button id="button" onclick="submit()" class="bg-success text-white"
                    style="margin: 15px 0px 25px 0px; width: 100%;">Envoyer</button>
            </div>
        </div>
    </div>




    </fieldset>
    <div class="container">
        <fieldset class="map">
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div id="acces">
                        <!--ajout d'une maps google-->
                        <!--je vais dans mon navigateur/
                            google maps/ 
                            je vais chercher ladresse qui minteresse/
                            ensuite je vais dans partager et sur integrer une carte, 
                            je lui dit que je veux une taille personaliser  dans le menu deroulant taille 600*350 : copier le contenu html (le iframe est surligner)
                            et je colle ce que lon recupere-->

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2687.920197716525!2d-2.775042284061922!3d47.647117579187395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48101c1e45bf9d89%3A0xf1b4ec0fcc4d768d!2s20%20Rue%20Winston%20Churchill%2C%2056000%20Vannes!5e0!3m2!1sfr!2sfr!4v1573737586045!5m2!1sfr!2sfr"
                            width="600" height="350" frameborder="0" style="border:1px solid green;width: 100%;"
                            allowfullscreen=""></iframe>
                    </div>
                    <br>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <address>
                        <span class="titreadresse">Verte Nature<br></span>
                        20 rue Winston Churchill<br>
                        56000 Vannes<br>
                        tel: 0297******
                    </address>
                </div>


            </div>
    </div>
    </div>
    </fieldset>
    </div>
</main>




<?php
    include 'layouts/footer.php';
?>