<?php
    include_once './Conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar</title>
</head>
<body>
    <h1>Cadastrar</h1>
    <?php
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

        if(!empty($dados['CadUser'])){
            var_dump ($dados);
        }
    ?>
    <form name = "cad-usuario" method = "post" action="">
        <label>Nome: </label>
        <input type = text name = "nome" id = "nome" placeholder = "nome completo"><br><br>

        <label>Email: </label>
        <input type = email name = "email" id = "email" placeholder = "seu melhor email"><br><br>

        <input type = "submit" value = "CONFIRMAR" name = "CadUser";
</body>
</html>