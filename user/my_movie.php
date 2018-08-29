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
        $sql = "select * from movie as m inner join movie_user as mu where m.id = mu.id_movie and mu.id_user = $id";

echo '<div class="col-md-3"></div>';
echo '<div class="col-md-6">';

        echo '<table border = "2" class="table"> ';
           echo '     
  <tr>
    <th><h1 style="text-align:center">Titulo do Filme</h1></th>
    <th><h1 style="text-align:center">Data</h1></th>
    <th><h1 style="text-align:center">Hora</h1></th>
    <th><h1 style="text-align:center">Qr Code do Ingresso</h1></th>
  </tr>
';
        foreach($pdo->query($sql)as $row){
   echo '    	
  <tr>
    <td><h1 style="text-align:center">'.$row['nome'].'</h1></td>
    <td><h1 style="text-align:center">'.$row['dat'].'</h1></td>
    <td><h1 style="text-align:center">'.$row['hora'].'</h1></td>
    <td><img src="QR_code.png"></td>
  </tr>
';
        }
echo "</table></div>";
?>


<?php


