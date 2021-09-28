<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
        $ppantalon = 29.99;
        $npantalones = 3;
        $pcamisa = 25.99;
        $ncamisas = 2;
        $total = ($ppantalon*$npantalones) + ($pcamisa*$ncamisas);
        define("descuento", 8);
        $des = $total - ($total*descuento)/100;
        printf("<p>");
        printf("El precio de un pantalon es %.2f", $ppantalon );
        printf("</p>");

        printf("<p>");
        printf("El precio de un pantalon es %.2f", $pcamisa );
        printf("</p>");

        printf("<p>");
        printf("El precio total sin descuento es  %.2f", $total );
        printf("</p>");

        printf("<p>");
        printf("El precio total con descuento es  %.3f", $des );
        printf("</p>");
    ?>
</body>
</html>