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
        // On pose la condition
        $a = 17;
        $b = 21;
        // Pour comparer ==, ===, <, <=, , >, >=, !=, !==, <=>(l'opérateur combiné)
        echo ($a <=> $b); // -1  a < b;
        echo ($a <=> $b); // 0   a = b;
        echo ($a <=> $b); // 1   a > b;

        // Switch
        switch ($a <=> $b) {
            case -1:
                echo "a plus petit que b";
                break;
            case 0:
                echo "a égal b";
                break;
            case 1:
                echo "a plus grand que b";
                break;
            default:
                echo "nada";
                break;
        }
    ?>
</body>
</html>