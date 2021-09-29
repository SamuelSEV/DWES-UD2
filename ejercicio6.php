<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <?php
        $nOpeDia = "2";
        $nOpeSem = 5;
        define("maxOpDia", 6);
        define("maxOpSem", 30);
       
        printf("<p>");
        printf("El valor de operaciones diarias es mayor o igual que el maximo:") ;
        var_export($nOpeDia >= maxOpDia);
        printf("</p>");

        printf("<p>");
        printf("El valor de operaciones semanales es mayor o igual que el maximo:") ;
        var_export($nOpeSem >= maxOpSem);
        printf("</p>");

        printf("<p>");
        printf("El valor de operaciones diarias es identico al maximo:") ;
        var_export($nOpeDia === maxOpDia);
        printf("</p>");

        printf("<p>");
        printf("El valor de operaciones diarias es distinto al de operaciones semanales:") ;
        var_export($nOpeDia != maxOpSem);
        printf("</p>");

    ?>
</body>
</html>