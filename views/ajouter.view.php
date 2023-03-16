<?php 
require 'template.php';
?>
<style>
    <?php require 'style/form.css';?>
    <?php require 'style/menu.css';?>
</style>

<h2 id="h2-title">Rédiger Votre Article</h2>

<form action="/projet_dev/ajouter/" method="POST" class="article-form">
<div>
        <label for="title" class="form-label">Title :</label>
        <input type="text" id="title" name="title" class="form-input">
        <label for="description" class="form-label">Description :</label>
        <textarea id="description" name="description" class="form-textarea"></textarea>
        <label for="date" class="form-label">Date :</label>
        <input type="date" id="date" name="date" class="form-input">
        <button type="submit" class="form-butn">Ajouter l'article</button>
    </div>
</form>

