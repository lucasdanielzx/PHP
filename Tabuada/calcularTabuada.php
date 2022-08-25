<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        $num = $_GET["t"];
        echo "<h1>Tabuada do $num</h1>";

        $c = 1;
        while($c <= 10){
            $l = $num * $c;
            echo "$num x $c = $l <br>"; 
            $c++;
        }
    ?>
</body>
</html>