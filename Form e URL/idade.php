<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $nome = $_GET["nome"];
            $ano = $_GET["ano"];
            $sexo = $_GET["sexo"];
            $idade = date("Y") - $ano;
            echo "$nome tem $idade anos"
        ?>
        <br><a href="estudo7.php">Voltar</a>
    </div>
</body>
</html>