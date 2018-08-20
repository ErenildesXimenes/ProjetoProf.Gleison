<?php
session_start();
if(isset($_SESSION['logado'])){
	if($_SESSION['tipo'] == 'adm'){
	}
	else{
		header('location:../user/home');
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
  	<div class="tab-content">
      <div class="row">
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
              <button type="button" onclick="window.location.href=\'edit_movie?id='.$row["id"].'\'" class="btn btn-primary">Ver Filme</button>
            </div>
          </div>
        </div>';
        }
?>
    
 
        <div class="col-md-3">
          <div class="card" style="width:auto" align="center">
            <div class="card-img-top" style="background-color: white;display:inline-block;width: 130px;height: 200px;text-align: center;" alt="logo-evento">
            	<span style="font-size: 140px" class="glyphicon glyphicon-plus"></span>
            </div>
            <div class="card-body">
              <h5 class="card-title">&nbsp;&nbsp;&nbsp;</h5>
              <button onclick="window.location.href='sign_movie'" class="btn btn-primary">Novo Filme</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

