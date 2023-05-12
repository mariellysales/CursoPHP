<?php
session_start();
ob_start();
include_once './conexao.php';

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

if (empty($id)) {
    $_SESSION['msg'] = "<p style='color: red;'>Erro: Usuário não encontrado!</p>";
    header("Location: index.php");
    exit();
}
$query_usuario = "SELECT id, nome, email FROM usuarios WHERE id = $id LIMIT 1";
$result_usuario = $conn->prepare($query_usuario);
$result_usuario->execute();

if (($result_usuario) and ($result_usuario->rowCount() != 0)) {
    $row_usuario = $result_usuario->fetch(PDO::FETCH_ASSOC);
    var_dump($row_usuario);
} else {
    $_SESSION['msg'] = "<p style='color: red;'>Erro: Usuário não encontrado!</p>";
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Editar</title>
</head>

<body>
<br><a href="index.php">Listar</a><br>
    <a href="cadastrar.php">Cadastrar</a><br>

    <h1>Editar</h1>

    <?php
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    //Verificar se o usuário clicou no botão
    if(!empty($dados['EditUsuario'])){
        $empty_input = false;
        $dados = array_map('trim', $dados);
        if(in_array("", $dados)){
            $empty_input = true;
            echo "<p style='color: red;'>ERRO: Necessário preencher todos os campos.</p>";
        }elseif (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)){
            $empty_input = true;
            echo "<p style='color: red;'>ERRO: Necessário preencher com e-mail válido.</p>";
        }

        if(!$empty_input){
            $query_up_usuario = "UPDATE usuarios SET nome=:nome, email=:email WHERE id=:id";
            $edit_usuario = $conn->prepare($query_up_usuario);
            $edit_usuario->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
            $edit_usuario->bindParam(':email', $dados['email'], PDO::PARAM_STR);
            $edit_usuario->bindParam(':id', $id, PDO::PARAM_INT);
            if($edit_usuario->execute()){
                $_SESSION['msg'] = "<p style='color: green;'> Usuário editado.</p>";
                header("Location: index.php");
            } else{
                echo "<p style='color: red;'>ERRO: Usuário não foi editado.</p>";
            }
        }
    }
    ?>
    <form id="edit-usuario" method="POST" action="">
        <label for="">Nome</label>
        <input type="text" name="nome" id="nome" placeholder="Nome completo" value="<?php
        if(isset($dados['nome'])){
            echo $dados['nome'];
        }elseif (isset($row_usuario['nome'])) {
            echo $row_usuario["nome"];
        } ?>" required><br><br>
        <label for="">E-mail</label>
        <input type="text" name="email" id="email" placeholder="E-mail" value="<?php
                if(isset($dados['email'])){
                    echo $dados['email'];
                }elseif (isset($row_usuario['email'])) {
            echo $row_usuario["email"];
        } ?>" required><br><br>
        <input type="submit" value="Salvar" name="EditUsuario">
    </form>

</body>

</html>