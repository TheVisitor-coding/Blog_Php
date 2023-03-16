<?php
require_once "models/Articles.class.php";

class ArticlesController{
    private $article;

    public function __construct(){
        $this->article = new Article;
    }

    // Fonction pour afficher les livres
    public function afficherArticles(){
        // On récupère tout les livres (Model Livre)
        $articles = $this->article->chargementArticles();
        // On appelle la view pour les afficher
        require "views/articles.view.php";
    }


public function afficherForm(){
    require "views/ajouter.view.php";
} 
public function afficherForm2(){
        require "views/update.view.php";
    }

public function ajouterArticle(){
    if (isset($_POST['title'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $date = $_POST['date'];
        $this->article->ajoutArticle($title, $description, $date);
        header('location:' . "/projet_dev");
    }
}

public function updateArticle($id){
    echo $_GET['id'];
    if (isset($_POST['title'])){
        $id = $_GET['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $date = $_POST['date'];
        $this->article->modifierArticle($id, $title, $description, $date);
        header('location:' . "/projet_dev");
    }
}

    public function voirArticle($id) {
   $articles=$this->article->viewArticle($id);
    require "views/article.view.php";
    }

    public function deleteArticle($id){
    $this->article->supprimerArticle($id);
    header('Location: '."/projet_dev");
}
}

