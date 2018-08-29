<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

require_once "../database.php";

$pdo = Database::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "insert into user(nome, senha, email, tipo) values ('$nome', md5('$senha'), '$email', 2);";
            $q = $pdo->prepare($sql);
            $q->execute();
            Database::desconectar();
           echo '<div style="text-align:center;"><a href="login"> Cadastro com sucesso!<br>Clique aqui para entrar</a></div>';
?>