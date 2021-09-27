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
        $nombre = "Samuel Rivera Peñalosa";
        $poblacion = "Sevilla";
        $edad = 35;
        printf("<p>");
        printf("Soy %s , tengo %d años de edad y vivo en %s", $nombre, $edad, $poblacion);
        printf("</p>");

        echo "Soy $nombre , tengo $edad años de edad y vivo en $poblacion"; 

    ?>
</body>
</html>