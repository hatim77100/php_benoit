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
        $chaine = "ceci est une chaîne de caractère";
        echo $chaine;
        echo '</br>';
        // Afficher un caractère particulier de la chaîne:
        echo $chaine[3];
        echo '</br>';
        // Modifier un caractère de la chaîne
        $chaine[3] = 'b';
        echo $chaine;
        echo '</br>';
        // Extraire une partie de la chaine
        echo substr($chaine, 5, 3);
        echo '</br>';
        // Remplacer une partie de la chaîne de caractère
        $chaine = str_replace("cecb", "cela", $chaine); // cette fonction est sensible à la casse.
        echo $chaine;
        echo '</br>';
        $chaine = str_ireplace("cela", "alors", $chaine); // cette fonction est insensible à la casse.
        echo $chaine;
        echo '</br>';
        // Vérifier si notre chaîne contient quelque chose
        var_dump(str_contains($chaine, "est"));
        echo '</br>';
        var_dump(str_starts_with($chaine, "est"));
        echo '</br>';
        var_dump(str_ends_with($chaine, "ère"));
    ?>
</body>
</html>