<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Testes</title>
</head>
<body>
    <h1>Testes na Linguagem PHP</h1>
    
    <?php
        //Variavéis e operadores aritméticos
        $a = 4;
        $b = 4;

        $s = $a + $b;
        echo "Resultado da soma: $s <br>";

        //Operador unitário
        $opu = ($s<10)?"menor que 10":"maior que 10";
        echo "Portanto, o resultado é $opu <br><br>";

        $c = 16;
        $d = 2;

        $c += $d; 
        echo "Soma da variavel C com D igual a $c <br><br>";

        //Parâmetro pela URL
        $v1 = $_GET["x"];   
        $v2 = $_GET["y"];

        echo "Valores recebidos na URL: $v1 e $v2 <br><br>";

        //IF e Else
        if ($a == $b) {
            echo "O valor de A é igual ao de B.";
        }
        else {
            echo "O valor de A e B não são iguais.";
        }    
    ?>

</body>
</html>