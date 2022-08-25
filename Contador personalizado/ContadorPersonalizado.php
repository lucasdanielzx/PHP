<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contador personalizável</title>
</head>
<body>
    <h1>Contador</h1>

    <form method="get" action="contador.php">
        <fieldset>
            <label for="in">Número de inicio</label>
            <input type="text" name="inicio" id="in" placeholder="nº inicial"/> <br>
            
            <label for="fim">Número de fim</label>
            <input type="text" name="fim" id="fim" placeholder="nº final"/> <br>
            
            <label for="inc">Número de incremento</label>
            <input type="text" name="incremento" id="inc" placeholder="nº de inicio"/> <br>
            <input type="submit" value="enviar">
        </fieldset>
        
    </form>
</body>
</html>