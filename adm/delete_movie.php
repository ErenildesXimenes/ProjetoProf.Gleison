<?php
$id = $_GET['id'];

 require_once "../database.php";
       
        $pdo = Database::conectar();
        $sql = "delete FROM movie where id= '$id'";
        $pdo->query($sql);
        header('location: home');
?>
delete