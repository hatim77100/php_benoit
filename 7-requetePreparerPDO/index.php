
    <?php
    $titre = "Accueil";
    // on inclus le fichier function

    require_once "./includes/functions.php";

    @include_once "./includes/header.php"; // @ permet de masquer les messages d'erreur

    include_once "./includes/navbar.php";

    ?>

<?php
 require_once "./includes/connect.php";
   $username = "hatim"; /*"admin'; --";*/ /* avec cette façon je récupère l'utilisateur admin avec son mot de passe: là on'a une injection sql
                                les (--) elle met la suite de la requete en commentaire*/
   $password = "khfizhifg"; // "khfizhifg' OR 1=1; --"; 


//  $sql = "SELECT * FROM  `users` WHERE `username`='$username' AND `pass`='$password'";
 $sql = "SELECT * FROM  `users` WHERE `username`=:username AND `pass`=:pass";

 // On prépare la requête
 $requete = $db->prepare($sql);

 // On injecte les valeurs "bindValue";
 $requete->bindValue(":username", $username, PDO::PARAM_STR);   
 $requete->bindValue(":pass", $password, PDO::PARAM_STR);   

 // On exécute la requête:
 $requete->execute();

 $user = $requete->fetch();
 echo "<pre>";
 var_dump($user);
 echo "</pre>";

include_once "./includes/footer.php";
