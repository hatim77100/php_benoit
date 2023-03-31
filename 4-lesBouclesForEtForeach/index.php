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
        $clients=[
            "ref1" => [
                "nom" => "Najoua",
                "prenom" => "Hatim",
            ],
            "ref2" => [
                "nom" => "césar",
                "prenom" => "jules",
            ]
        ];
        // echo sizeof($clients); taille de tableau

        for($nombre = 1; $nombre <= 10; $nombre++) {
            echo "<p>$nombre</p>";
        }

        // itérer sur un tableau
        echo "<pre>";
        foreach($clients as $ref => $client) {
            // var_dump($client);
            echo "<p>Référence client : $ref</p>";
            echo "<p>{$client["prenom"]} {$client["nom"]}</>"; // on met les accolades car on a une injection de variable.
        }
        echo "</pre>";
    ?>
</body>
</html>