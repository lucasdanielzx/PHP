<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Nome, idade e sexo</title>
</head>
<body>
    <form method="get" action="idade.php">
        Nome: <input type="text" name="nome"/> 
        Ano de Nascimento: <input type="text" name="ano"/> <br>
        <fieldset>
            <legend>Sexo</legend>
            <input type="radio" name="sexo" id="masc" checked>
            <label for="masc">Masculino</label><br>
            <input type="radio" name="sexo" id="fem">
            <label for="fem">Feminino</label><br>
        </fieldset> <br>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>