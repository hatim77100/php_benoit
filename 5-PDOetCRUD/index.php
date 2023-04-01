<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Constantes d'environnement
        define("DBHOST", "localhost");
        define("DBUSER", "root");
        define("DBPASS", "");
        define("DBNAME", "benoit");

        // DSN de connexion: data source name
        $dsn = "mysql:dbname=".DBNAME.";host:".DBHOST;

        // On va se connecter à la base
        try{
            //  on instancie PDO: on va créer un PDO
            $db = new PDO($dsn, DBUSER, DBPASS);
            echo "On est connecté";
            // On s'assure d'envoyer les données en UTF8
            $db->exec("SET NAMES utf8");
        }catch(PDOException $e){
            die("ERROR : " . $e->getMessage());
        }

        // Ici on est connectés à la base
        // On peut récupérer les liste des users
        $sql = "SELECT * FROM `users`";

        // On exécute directement la requête
        $requete = $db->query($sql);

        // On récupère les données (fetch ou fethcAll)
        $user = $requete->fetchAll(PDO::FETCH_ASSOC);

        echo "<pre>";
        var_dump($user);
        echo "<pre>";

        // #Ajouter un utilisateur
        $sql = "INSERT INTO `users`( `email`, `pass`, `roles`) VALUES ('hatrin@hot.fr','khfizhifg','[admin]')";
        $requete = $db->query($sql);
       
        // Modifier un utilisateur
        $sql = "UPDATE `users` SET `pass` = `test` WHERE `id` = 2 ";
        $requete = $db->query($sql);

        // Supprimer des utilisateurs
        $sql = "DELETE FROM `users` WHERE `id` > 3";
        $requete = $db->query($sql);

        // savoir de combien de lignes ont été supprimés
        echo $requete->rowCount();

    ?>
</body>
</html>