<?php
    session_start();
    ob_start();
include_once './conexao.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Cadastrar Formulário</title>
</head>
<body>
    <a href="index.php">Listar</a><br>
    <a href="cadastrar.php">Cadastrar</a><br>
    <h1>Cadastrar</h1>
    <?php
    //Recebe os dados do Formulário
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
//Verifica se o usuário clicou no botão
    if (!empty($dados['CadUsuario'])) {
        $empty_input = false;
        $dados = array_map('trim', $dados);
//Verifica se a string está vazia e se o e-mail é válido
        if (in_array("", $dados)) {
            $empty_input = true;
            echo "<p style='color: red;'>ERRO: Necessário preencher todos os campos.</p>";
        } elseif (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
            $empty_input = true;
            echo "<p style='color: red;'>ERRO: Necessário preencher com e-mail válido.</p>";
        }
//Cria a query e cadastra os valores preenchidos pelo usuário no banco de dados
        if (!$empty_input) {
            $query_usuario = "INSERT INTO usuarios (nome, email) VALUES (:nome, :email)";
            $cad_usuario = $conn->prepare($query_usuario);
            $cad_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
            $cad_usuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
            $cad_usuario->execute();
//Mostra para o usuário que o cadastro foi realizado baseado na quantidade de linhas afetadas
            if ($cad_usuario->rowCount()) {
                unset($dados);

                $_SESSION['msg'] = "<p style='color: green;'>Usuário cadastrado com sucesso!</p>";
                header("Location: index.php");
            } else {
                echo "<p style='color: red;'>ERRO: Usuário não cadastrado.</p>";
            }
        }
    }

    ?>
    <form name="Cadastrar" method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome" value="<?php
        if (isset($dados['nome'])) {
            echo $dados['nome'];
        } ?>"><br><br>
        <label for="email">E-mail:</label>
        <input type="textarea" name="email" id="email" placeholder="Digite seu e-mail" value="<?php
        if (isset($dados['email'])) {
            echo $dados['email'];
        } ?>"><br><br>
        <input type="submit" value="Enviar" name="CadUsuario">
    </form>
</body>

</html>