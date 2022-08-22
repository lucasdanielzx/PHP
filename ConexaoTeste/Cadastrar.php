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
        $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT); //receber dados

        if(!empty($dados['CadUser'])){
            var_dump ($dados);
            $empty_input = false;

            $dados = array_map('trim', $dados);

            if(in_array("", $dados)) {
                $empty_input = true;
                echo "<p style = 'color: red'>ERRO: Necessário preencher todos os campos.</p>";
            } else if (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)){
                $empty_input = true;
                echo "<p style = 'color: red'>ERRO: Necessário preencher com email válido.</p>";
            }
            
            if (!$empty_input) {
                $query_usuario = "INSERT INTO usuarios (nome, email) VALUES (:nome, :email)";
                $cad_usuario = $conn->prepare($query_usuario);
                $cad_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
                $cad_usuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
                $cad_usuario->execute();

                if ($cad_usuario->rowCount()){
                    echo "<p style = 'color: green'>SUCESSO: Usuário cadastrado!</p>";
                } else {
                    echo "<p style = 'color: red'>ERRO: Usuário não cadastrado.</p>";
                }
            }
            
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