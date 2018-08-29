<?php
session_start();
if(isset($_SESSION['logado'])){
	if($_SESSION['tipo'] == 'use'){
	}
	else{
		header('location:../adm/home');
	}
}
else{
	header('location:../');
}
?>


<?php
include '../header-footer/header.php';
 require_once "../database.php";

$idUser = $_SESSION['idUser'];
$idMovie = $_GET['id'];

$pdo = Database::conectar();
        $sql = "insert into movie(id_movie, id_user) values(1,1)";

$pdo = Database::conectar();
try{
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //$pdo->serAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
            $sql = "insert into movie_user(id_user, id_movie) values($idUser,$idMovie)";
            $q = $pdo->prepare($sql);
            $q->execute();
            echo "<h1>Compra realizada com sucesso</h1>";
        }catch(PDOException $e){
        	echo "<h1>Não é possivel comprar novamente o filme.</h1>";
        }
            Database::desconectar();

?>