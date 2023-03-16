<?php
require 'template.php';

foreach ($articles as $article) {  
?>
<style>
    <?php require 'style/menu.css';?>
    <?php require 'style/article.css';?>
</style>
<div class="news">
    <div class="butn">
        <a class="butn-update" href="/projet_dev/article_update/<?= $article['id'];?>">Modifier l'article</a>
        <a class="butn-delete" href="/projet_dev/article_delete/<?=  $article['id']; ?>">Supprimer l'article</a>
    </div>
    <div>
            <h2 class="title">
                <?= htmlspecialchars($article['title']); ?>
            </h2>
            <div class="align-items">
                <em>le <?= $article['date']; ?></em>
            </div>  
    </div>
            <p>
                <?= $article['description']; ?>
            </p>
            
        </div>

<?php 
}
?>