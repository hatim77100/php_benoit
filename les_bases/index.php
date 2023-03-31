<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?=
         "<h1> Hello !</h1>"; 
         $nom = "hatim"; 
        //  l'injection de variable fonctionne uniquement avec les guimets doubles "";
         echo "<p> hello $nom</p>"; 

         // les types de variables:
         /* - Entiers (int)
            - Décimaux (float)
            - String
            - Boolean
         */

        // Connaitre le contenu et le type d'une variable
         var_dump($nom);
    ?>
</body>
</html>