<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <?php
        $n = 100;
        $n1 = 1000;
        $and = $n & $n1;
        $or = $n | $n1;
        $xor = $n ^ $n1;
        $not = ~$n;
        $notN1 = ~$n1;

        printf("<p>");
        printf("El valor en binario de la %d es: %b", $n, $n);
        printf("</p>");

        printf("<p>");
        printf("El valor en binario de la %d es: %b", $n1, $n1);
        printf("</p>");

        printf("<p>");
        printf("El resultado de la operación de comparación bit a bit AND es: %b", $and);
        printf("</p>");

        printf("<p>");
        printf("El resultado de la operación bit a bit NOT es: %b", $not) ;
        printf("</p>");

        printf("<p>");
        printf("El resultado de la operación bit a bit NOT es: %b", $notN1);
        printf("</p>");

        printf("<p>");
        printf("El resultado de la operación de comparación bit a bit OR es: %b", $or);
        printf("</p>");

        printf("<p>");
        printf("El resultado de la operación de comparación bit a bit XOR es: %b", $xor);
        printf("</p>");
    ?>
</body>
</html>