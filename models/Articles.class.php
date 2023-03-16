<?php
require_once "Model.class.php";

class Article extends Model{

  // méthode pour récupérer tout les livres
  public function chargementArticles(){
    $req = $this->getBdd()->prepare("SELECT * FROM article");
    $req->execute();
    return $mesArticles = $req->fetchAll();
  }

  public function viewArticle($id){
    $req = $this->getBdd()->prepare("SELECT * FROM article WHERE id=:id");
    $req->execute(['id' => $id]);
    return $nosArticles = $req->fetchAll();
  }

public function ajoutArticle(string $title, $description, $date){
    $sqlQuery = 'INSERT INTO article (title, description, date) VALUES (:title, :description, :date)';
    $insertArticle = $this->GetBdd()->prepare($sqlQuery);
    $insertArticle->execute([
         'title' => $title,
         'description' => $description,
         'date' => $date
     ]);
}

public function modifierArticle($id, $title, $description, $date){
 if (empty($title) || empty($description) || empty($date) === false){
    $sqlQuery = "UPDATE article SET title = :title, description = :description, date = :date WHERE id=:id";
    $insertArticle = $this->GetBdd()->prepare($sqlQuery);
    $insertArticle->execute([
         'id' => $id,
         'title' => $title,
         'description' => $description,
         'date' => $date
     ]);
 }
}
public function supprimerArticle($id){
    $req = "Delete from article where id = :id";
    $deletearticle = $this->getBdd()->prepare($req);
    $deletearticle->execute([
      'id' => $id
   ]);
}
}
