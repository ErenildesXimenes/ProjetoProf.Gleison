<!DOCTYPE html>
<html>
<head>
  <title>SESSÃO CINE</title>
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="../bootstrap/js/bootstrap.min.js"></script>
<script src="../bootstrap/jquery/jquery-1.11.1.min.js"></script>
<meta charset="utf-8">
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SESSÃO CINE</a>
    </div>
     <ul class="nav navbar-nav">
      <li class="active"><a href="#">HOME</a></li>
      <!--li><a href="#">HOME</a></li>
      <li><a href="#">Page 2</a></li-->
    </ul>
    <ul class="nav navbar-nav navbar-right">
    <?php 
    if(!(isset($_SESSION['logado']))){
      echo "<li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Sign Up</a></li>
      <li><a href=\"../auth/login\"><span class=\"glyphicon glyphicon-log-in\"></span> Login</a></li>";
    }
    else{
      echo "<li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span>".$_SESSION['logado']."</a></li>
      <li><a href=\"../auth/logout\"><span class=\"glyphicon glyphicon-log-out\"></span> Sair</a></li>";
    }

     ?>
      
    </ul>
  </div>
</nav>

