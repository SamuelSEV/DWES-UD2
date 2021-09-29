<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>
<body>
    <?php
        $v1 = "20.10";
        $v2 = "4fgfsd";

        printf("<p>");
        printf("la variable %s es de tipo: ", $v1) ;
        printf (gettype($v1));
        echo " ";
        var_export(is_numeric($v1));
        echo " ";
        var_export(is_string($v1));
        printf("</p>");

        printf("<p>");
        printf("conversion %d en decimal: ", $v1) ;
        printf ((float)$v1);
        echo " ";
        var_export(is_float($v1));
        echo " ";
        var_export(is_integer($v1));
        printf("</p>");

        $v3 = (integer)$v1;
        printf("<p>");
        printf("Conversion %s a integer: ", $v1) ;
        printf ((integer)$v1);
        echo " ";
        
        printf("</p>");

        printf("<p>");
        printf("Conversion %s a integer: ", $v2) ;
        settype($v2, 'integer');
        echo " ";
        printf($v2);
       
        
        printf("</p>");


    ?>
</body>
</html>