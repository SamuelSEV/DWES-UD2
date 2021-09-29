<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>

<body>
    <h1>Variables $_SERVER</h1>
    <?php
        echo "<ul>";
        echo "<li>PHP_SELF ---> ", $_SERVER["PHP_SELF"], ": Nos devuelve una cadena con la URL del script que está siendo ejecutado. Muy interesante para crear botones para recargar la página.</li>";
        echo "<li>SERVER_ADDR ---> ", $_SERVER["SERVER_ADDR"], ": Muestra la dirección IP del visitante.</li>";
        echo "<li>SERVER_NAME ---> ", $_SERVER["SERVER_NAME"], ": El nombre del servidor anfitrión bajo el que está siendo ejecutado el script actual. Si el script está corriendo en un host virtual, éste será el valor definido para ese host virtual.</li>";
        echo "<li> DOCUMENT_ROOT ---> ", $_SERVER["DOCUMENT_ROOT"], ": El directorio raiz de documentos bajo el que está siendo ejecutado el script actual, tal y como se define en el archivo de configuración del servidor.</li>";
        echo "<li> REMOTE_ADDR ---> ", $_SERVER["REMOTE_ADDR"], ": La dirección IP desde donde el usuario está observado la página actual.</li>";
        echo "<li> REQUEST_METHOD ---> ", $_SERVER["REQUEST_METHOD"], ": Obtenemos el tipo de petición (GET o POST)</li>";
        echo "</ul>"
    ?>
    <h1>Varianle local, estatica y global</h1>

    <?php
        $var1 = 3;
        function mostrar() {
            GLOBAL $var1;
            $var1 = 1;
            echo $var1 . '<br/>';
            STATIC $estatica = 1;
            $estatica++;
            echo $estatica . '<br/>';
            echo "---------------- <br>" ;   
        }
        echo $var1 . '<br/>';
        mostrar();
        echo $var1 . '<br/>';
        mostrar();
    ?>
</body>

</html>