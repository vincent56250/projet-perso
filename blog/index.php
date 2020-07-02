<?php
session_start();
require_once "fonctions/bdd.php";
include "fonctions/blog.php";
$bdd = bdd();
if(!empty($_POST)){
    $articles = search();
}else{
    $articles = articles();
}

include 'layouts/head.php';
include 'layouts/header.php';
?>

<div class="container article">
    <div class="row">
        <form method="post" action="index.php">
            <div class="col-sm-10">
                <input type="text" name="query" placeholder="Rechercher un article ..."
                    value="<?php if(isset($_POST['query'])) echo $_POST['query'] ?>">
            </div>
            <div class="col-sm-2">
                <input type="submit" value="OK!">
            </div>
        </form>
    </div>

    <?php if(isset($_POST['query'])) :  ?>

    <div class="row">
        <div class="col-xs-12">
            <h1>Résultat de ma recherche : " <?= $_POST['query'] ?> " </h1>
        </div>
    </div>

    <?php endif ?>

    <div class="row">
        <?php foreach($articles as $article) : ?>
        <div class="col-md-4 col-sm-6">
            <article>
                <img src="img/<?= $article['image']?>" alt="https://placeimg.com/640/480/people">
                <p class="date">Posté le <time datetime=""><?= dateArticle($article['created_at'])?></time></p>
                <h1><?= $article['title']?></h1>
                <p><?= $article['extract']?></p>
                <a href="article.php?id=<?= $article['id'] ?>">Lire l'article</a>
            </article>
        </div>
        <?php endforeach ?>
    </div>
    <?php 
include 'layouts/footer.php';
?>