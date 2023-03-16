<?php
require_once "controllers/ArticlesController.php";
$articleController = new ArticlesController;

if(empty($_GET['page'])){
    require "views/template.php";
    $articleController->afficherArticles();
} else {
    switch($_GET['page']){
        case "accueil" : require "views/template.php";
        $articleController->afficherArticles();
        break;
        case "article_new" : $articleController->afficherForm();
        break;
        case  "ajouter" : $articleController->ajouterArticle();
        break;
        case "article_view" : $articleController->voirArticle($_GET['id']);
        break;
        case "modifier" : $articleController->updateArticle($_GET['id']);
        break;
        case "article_update" : $articleController->afficherForm2();
        break;
        case "article_delete" : $articleController->deleteArticle($_GET['id']);
        break;
    }
}

?>
<style>
    <?php require 'style/menu.css';?>
    <?php require 'style/card.css';?>
</style>