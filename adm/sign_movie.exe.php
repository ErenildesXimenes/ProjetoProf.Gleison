<?php
$nome = $_POST['nome'];
$genero = $_POST['genero'];
$class = $_POST['class'];
$valor = $_POST['valor'];
$url = $_POST['url'];
$hora = $_POST['registration_time'];
$sinopse = $_POST['comment'];


$var = $_POST['registration_date'];
$dia = substr($var, 8, 9);
$mes = substr($var, 5, 2);
$ano = substr($var, 0, 4);
$dat = $dia.'/'.$mes.'/'.$ano;

require_once "../database.php";

$pdo = Database::conectar();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO `sessaocine`.`movie` (`nome`, `genero`, `class`, `valor`, `banner`, `dat`, `hora`, `sinopse`) VALUES ('$nome', '$genero', '$class', '$valor', '$url', '$dat', '$hora', '$sinopse')";
            $q = $pdo->prepare($sql);
            $q->execute();
            Database::desconectar();
            header('Location: home');
?>