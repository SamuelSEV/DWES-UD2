<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php
        $ppantalon = 29.99;
        $npantalones = 3;
        $pcamisa = 25.99;
        $ncamisas = 2;
        $pzapatos = 45.99;
        $dzapato = 12;
        $descZapatos = $pzapatos - ($pzapatos*$dzapato)/100;
        $total = ($ppantalon*$npantalones) + ($pcamisa*$ncamisas);
        define("descuento", 8);
        $des = $total - ($total*descuento)/100;
        $des = $des + $descZapatos;
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
        printf("El precio de los zapatos sin descuento es %.2f", $pzapatos );
        printf("</p>");

        printf("<p>");
        printf("El precio de los zapatos con descuento es %.2f", $descZapatos );
        printf("</p>");

        printf("<p>");
        printf("El precio total de la cuenta  es  %.2f", $des );
        printf("</p>");
    ?>
</body>
</html>