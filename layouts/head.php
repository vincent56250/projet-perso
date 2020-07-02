<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,300,700">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link rel="stylesheet" href="public/stylesheets/style.css">

    <script src="public/javascripts/creds.js" async></script>
    <script src="public/javascripts/jq.js" async></script>
    <script src="public/javascripts/api.js" async></script>
    <title>Verte nature</title>

</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <header>

                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                    Connection
                </button>

                <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">S'identifier</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">

                                <form action="/action_page.php" class="was-validated">
                                    <div class="form-group">

                                        <label for="uname">Adresse Mail:</label>
                                        <input type="text" id="InputEmail1" class="form-control"
                                            placeholder="Entrer votre mail">
                                        <span id="mailErrormodal"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="pwd">Mot de passe:</label>
                                        <input type="password" class="form-control" id="InputPassword1"
                                            placeholder="Entrer votre mot de passe">
                                        <span id="mdpError"></span>
                                    </div>
                                    <div class="form-group form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="remember" required>
                                            J'accepte les conditions générale.
                                            <div class="valid-feedback">Valide</div>
                                            <div class="invalid-feedback">Veuillez cocher pour continuer.</div>
                                        </label>
                                    </div>
                                    <button type="submit" id="envoi_modal" class="btn btn-success">Soumettre</button>

                                </form>

                                </br>
                                <h4>S'inscrire</h4>
                                </br>
                                <div>
                                    <!-- <label for="usrname">Votre Mail </label>
                                    <input type="text" class="form-control" id="usrname" name="usrname" required></br> -->



                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-xs-12 col-lg-12">
                                                <label for="usr">Nom:</label>
                                                <input type="text" id="InputNom1" class="form-control">
                                                <span id="missnom"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="usr">Prénom:</label>
                                                <input type="text" id="InputPrenom1" class="form-control">
                                                <span id="missPrenom"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="adress">Votre adresse:</label>
                                                <input type="text" name="adresse" id="InputAdress" class="form-control"
                                                    onkeyup="search()">
                                                <ul id="adressList"></ul>
                                                <span id="errorAdress"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="email">Votre E-mail:</label>
                                                <input type="text" name="email" id="InputEmail2" class="form-control">
                                                <span id="mailError"></span>
                                            </div>
                                        </div>
                                    </div>


                                    <label for="psw">Mot De Passe:</label>
                                    <input type="password" class="form-control" id="psw" name="psw"
                                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                        title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                        required>
                                    </br>
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="comment">Commentaires:</label>
                                                <textarea class="form-control" rows="5" id="comment"></textarea>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-lg-12">
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


                                    <!-- <button type="submit" class="btn btn-success">Soumettre</button> -->
                                </div>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-dismiss="modal">Annuler</button>
                            </div>



                        </div>
                    </div>
                </div>



                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-12">
                            <figure>
                                <a href="indexphp"><img src="public/images/logos/logo-verte-nature2.png"
                                        alt="logo-verte-nature" class="img-fluid img-logo"></a></figure>
                        </div>
                    </div>
                    <!-- A grey horizontal navbar that becomes vertical on small screens  -->

                    <nav class="navbar navbar-expand-sm bg-success navbar-dark justify-content-center">

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <!-- Links -->
                        <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">
                            <ul class="navbar-nav">
                                <li class="nav-item  bg-muted ">
                                    <a id="page" class="nav-link " href="index.php">Accueil</a>
                                </li>
                                <li class="nav-item bg-muted">
                                    <a class="nav-link  text-warning" href="presentation.php">Présentation</a>
                                </li>
                                <li class="nav-item bg-muted">
                                    <a class="nav-link  text-warning" href="boutique.php">Boutique</a>
                                </li>
                                <li class="nav-item bg-muted">
                                    <a class="nav-link  text-warning" href="blog/index.php">Blog</a>
                                </li>
                                <li class="nav-item bg-muted">
                                    <a class="nav-link  text-warning" href="contact.php">Contact/Accès</a>
                                </li>
                            </ul>
                        </div>
                    </nav>

            </header>