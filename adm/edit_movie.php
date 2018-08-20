<?php
$id = $_GET['id'];

include '../header-footer/header.php';
 require_once "../database.php";
       
        $pdo = Database::conectar();
        $sql = "SELECT * FROM movie where id= '$id'";


        foreach($pdo->query($sql)as $row){
        	echo '<div class="col-md-offset-3 col-md-3">
          <div class="card">
            <img class="card-img-top" src="'.$row["banner"].'" width="250" height="350" alt="logo-evento" align ="right">
          </div>
          </div>
          <div>
              <div class="card-body" align="left">
              <h3 class="card-title" align="left">'.$row["nome"].'</h3>
              <h4 class="card-title">Genero: '.$row["genero"].'</h4>
              <h4 class="card-title">Classificação: '.$row["class"].'</h4>
              <h4 class="card-title">Valor: '.$row["valor"].'</h4>
              <h4 class="card-title">Data/Hora: '.$row["dat"].'    '.$row["hora"].'</h4>
              <h4 class="card-title">Sinópse: '.$row["sinopse"].'</h4>
              <button type="button" onclick="window.location.href=\'delete_movie?id='.$row["id"].'\'" class="btn btn-danger">Deletar Filme</button>
            </div>
          </div>
        ';
        }
?>