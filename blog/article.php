<?php 
session_start();
require_once "fonctions/bdd.php";
include "fonctions/blog.php";
include_once "fonctions/user.php";
$bdd = bdd();
$article = article();
$nb = nb_commments();
$comments = comments();
if(!empty($_POST)){
    $error = post_comment();
}
include 'layouts/head.php';
include 'layouts/header.php';
?>

<div class="container article">
    <div class="row">
        <form method="post" action="">
            <div class="col-sm-10">
                <input type="text" name="query" placeholder="Rechercher un article ...">
            </div>
            <div class="col-sm-2">
                <input type="submit" value="OK!">
            </div>
        </form>
    </div>
    <div class="row">
        <article>
            <div class="col-sm-5">
                <img src="img/<?= $article['image']?>" alt="">
            </div>
            <div class="col-sm-7">
                <p class="date">Posté le <time
                        datetime="2015-10-20 20:29"><?= dateArticle($article['created_at'])?></time></p>
                <h1><?= $article['title']?></h1>
                <p><?= $article['content']?></p>
            </div>
        </article>
    </div>
</div>
<div class="container commentaires">
    <div class="row">
        <div class="col-xs-12">
            <h1>Commentaires (<?= $nb ?>)</h1>
        </div>
    </div>
    <?php foreach($comments as $comment) : ?>
    <div class="row commentaire">
        <div class="col-xs-12">
            <p class="date">Posté par <?= $comment['pseudo'] ?> le <time
                    datetime="<?= $comment['created_at']?>"><?= dateArticle($comment['created_at'])?></time> :</p>
            <p><?= $comment['content'] ?></p>
        </div>
    </div>
    <?php endforeach;
        if(isset($_SESSION['user'])) :

        ?>
    <div class="row">
        <div class="col-xs-12">
            <form method="post" action="">
                <?php
                if(isset($error)) :
                if($error) :
                ?>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="message erreur"> <?= $error ?> </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="message confirmation">Ici j'affiche un message de confirmation !</div>
                    </div>
                </div>
                <?php
                    endif;
                    endif
                    ?>
                <textarea name="commentaire" placeholder="Votre commentaire *"></textarea>
                <input type="submit" value="Commenter">
            </form>
        </div>
    </div>
    <?php
        endif;
        include 'layouts/footer.php';
        ?>