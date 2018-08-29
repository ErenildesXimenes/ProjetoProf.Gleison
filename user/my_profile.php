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
       
       $id = $_SESSION['idUser'];
        $pdo = Database::conectar();
        $sql = "SELECT * FROM user where id = $id";
        foreach($pdo->query($sql)as $row){
        	echo '<div style="text-align: right;" class="col-md-6"></div><div style="text-align: ringth ;" class="col-md-6"><img src="profile.png" width="70px"></div>
        	<div style="text-align: right;" class="col-md-6"><h4>Nome:</h4></div><div style="text-align: ringth ;" class="col-md-6"><h4>'.$row['nome'].'</h4></div>
        	<div style="text-align: right;" class="col-md-6"><h4>E-mail:</h4></div><div style="text-align: ringth ;" class="col-md-6"><h4>'.$row['email'].'</h4></div>';
        }

?>


