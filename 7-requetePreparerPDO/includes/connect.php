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
            // On s'assure d'envoyer les données en UTF8
            $db->exec("SET NAMES utf8");
        }catch(PDOException $e){
            die("ERROR : " . $e->getMessage());
        }

    ?>