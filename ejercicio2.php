<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <?php

        $triangulo = (5 * 5)/2;
        $cuadrado = 25 * 25;
        $rombo = (10 * 5)/2;
        define("PI", 3.14);
        $circulo = PI * 5 * 5;

        printf("<p>");
        printf("El circulo de radio 5cm tiene un área de %d", $circulo);
        printf("</p>");

        printf("<p>");
        printf("El triangulo de lado 5cm tiene un área de %d", $triangulo);
        printf("</p>");

        printf("<p>");
        printf("El cuadrado de lado 25cm tiene un área de %d", $cuadrado);
        printf("</p>");

        printf("<p>");
        printf("El rombo de diagonal mayor 10cm y digonal menos 5cm  tiene un área de %d", $rombo);
        printf("</p>");

    ?>
</body>
</html>