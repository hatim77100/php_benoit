<?php
// on vérifie si on a un id:
    if(!isset($_GET["id"]) || empty($_GET["id"])) {
        // je n'ai pas d'id
        header("Location: articles.php");
        exit;
    }

    // Je récupère l'id
    $id = $_GET["id"];
    
    // On se connecte à la base
    require_once "./includes/connect.php";

    // On va chercher l'article dans la base
    // On écrit la requête
    $sql = "SELECT * FROM `articles` WHERE `id` = :id";

    // On prépare la requête
    $requete = $db->prepare($sql);

    // On injecte les parametres
    $requete->bindValue(":id", $id, PDO::PARAM_INT);

    // On exécute la reqête
    $requete->execute();

    // On récupère l'article
    $article = $requete->fetch();

    // On vérifie si l'article est vide
    if(!$article) {
        // Pas d'article, error 404;
        http_response_code(404);
        echo "Article inexistant";
        header("Location: articles.php");
        exit;
    }

    // Ici on a un article
    $titre = strip_tags($article["title"]);

include_once "./includes/header.php";

include_once "./includes/navbar.php";

?>

                <article>
                        <h1><?= strip_tags($article["title"])?></h1>
                        <p>Publié le <?= $article["created_at"]?></p>
                        <div><?= strip_tags($article["content"]) ?></div>
                </article>
<?php
include_once "./includes/footer.php";
