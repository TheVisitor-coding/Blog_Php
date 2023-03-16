<head>
<link rel="stylesheet" href="style/card.css">
</head>

<body>
    <div class="container">
    <?php
    // require 'template.php';
    foreach ($articles as $article) {  
    ?>
    
        <div class="card" style="--cards: 3">
            <div class="child">
                <h2><?= substr($article['title'], 0, 40); ?></h2>
                <p class="desc-article">le <?= $article['date']; ?></p>
                <a class="butn-link" href="/projet_dev/article_view/<?= $article['id'];?>" class="btn btn-success d-block">Lire l'article</a>
            </div>
        <div class="child"></div>
        <div class="child"></div>
        </div>
    <?php
        }
    ?>
    </div>
        

</body> 