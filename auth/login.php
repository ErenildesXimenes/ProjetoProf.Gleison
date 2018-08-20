
<?php
include '../header-footer/header.php';

    session_start();

    require_once "../database.php";
 //   require_once "classes/Usuario.class.php";

    if (isset($_POST['ok'])):

        $login = filter_input(INPUT_POST, "login", FILTER_SANITIZE_MAGIC_QUOTES);
        $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_MAGIC_QUOTES);

       
        $pdo = Database::conectar();
        $sql = "SELECT * FROM user where email='$login' and senha = '$senha'";


        foreach($pdo->query($sql)as $row){ 

            if($row['tipo'] == '1'){
                $_SESSION['logado'] = $row['nome'];
                $_SESSION['tipo'] = 'adm';
                header('location:../adm/home');
            }
            else{
                $_SESSION['logado'] = $row['nome'];
                $_SESSION['tipo'] = 'use';
                header('location:../user/home');
            }
        }

//        if($l->logar()):
    //        header("Location: dashboard.php");
//        else:
 //           $erro = "Erro ao logar";
   //     endif;
    endif;


    //if(isset($_SESSION['logado'])):
      //  header("Location: dashboard.php");
   // else:

?>



<br>
<h3 align="center"> ENTRE NO SISTEMA</h3>
<br>
<div class="container">
    <div class="row">
        <div id="login" style="text-align: center;" class="col-md-offset-4 col-md-4">
            <form action="" method="POST" class="formulario">
                <div class="login">E-mail</div>
                <input type="text" name="login" class="form-control">
                <div class="senha">Telefone</div>
                <input type="text" name="senha" class="form-control"><br>
                <input type="submit" class="btn btn-primary btn-md " name="ok" value="Entrar" >
            </form>
            <?php echo isset($erro) ? $erro : ''; ?>
        </div> 
    </div>
</div>

     

