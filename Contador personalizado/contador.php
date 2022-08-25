<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contador</title>
</head>
<body>
    <?php
        $inicio = $_GET["inicio"];
        $fim = $_GET["fim"];
        $incremento = $_GET["incremento"];

        while ($inicio <= $fim) {
            echo "$inicio ";
            $inicio = $inicio + $incremento;
        }
    ?>
</body>
</html>