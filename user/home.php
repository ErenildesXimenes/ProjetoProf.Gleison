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
?>

<div class="container-fluid">
  <div class="content">
  	<div>
  		<div style="background-color: grey; height: 50px; text-align: center ;" class="col-md-6"><a href="my_profile" style="color: white; font-size: 30px">Meu Perfil</div>
  		<div style="background-color: grey; height: 50px; text-align: center ;" class="col-md-6"><a href="my_movie" style="color: white; font-size: 30px">Meu Filmes</a></div>
  	</div>
  	<br><br><br>
      <div class="row">
      	<div class="tab-content">
  		
<?php 
 require_once "../database.php";
       
        $pdo = Database::conectar();
        $sql = "SELECT * FROM movie";
        foreach($pdo->query($sql)as $row){
        	echo '<div class="col-md-3">
          <div class="card" style="width:auto" align="center">
            <img class="card-img-top" src="'.$row["banner"].'" width="130" height="200" alt="logo-evento">
            <div class="card-body">
              <h5 class="card-title">'.$row["nome"].'</h5>
              <button type="button" onclick="window.location.href=\'view_movie?id='.$row["id"].'\'" class="btn btn-primary">Ver Filme</button>
            </div>
          </div>
        </div>';
        }
?>
    
      </div>
    </div>
  </div>
</div>

