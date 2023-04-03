
    <?php
    $titre = "Accueil";
    // on inclus le fichier function

    require_once "./includes/functions.php";

    @include_once "./includes/header.php"; // @ permet de masquer les messages d'erreur

    include_once "./includes/navbar.php";

    ?>

<?php
verifForm();

include_once "./includes/footer.php";
