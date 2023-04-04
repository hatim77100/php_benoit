<?php
// on va chercher les articles dans la base
// on se connecte à la base
require_once "./includes/connect.php";

// On écrit la requête
$sql = "SELECT * FROM `articles` ORDER BY `created_at` DESC";

// On exécute la requête
$requete = $db->query($sql);

// On récupère les données
$articles = $requete->fetchAll();


$titre = "Liste des articles";

include_once "./includes/header.php";

include_once "./includes/navbar.php";

?>

<h1>Liste des articles</h1>

<section>
        <?php foreach ($articles as $article) : ?>
                <article>
                        <h1><a href= "article.php?id=<?=$article["id"] ?>"><?= strip_tags($article["title"])?></a></h1>
                        <p>Publié le <?= $article["created_at"]?></p>
                        <div><?= strip_tags($article["content"]) ?></div>
                </article>
        <?php
        endforeach; ?>
</section>
<?php
include_once "./includes/footer.php";
