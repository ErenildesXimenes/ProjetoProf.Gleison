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

    <div class="container col-md-offset-3 col-md-4">
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-body">
					<form method="POST" action="sign_movie.exe.php" role="form">
						<div class="form-group">
							<h2>Registrar Filme</h2>
						</div>
						<div class="form-group">
							<label class="control-label" for="signupName">Nome do Filme:</label>
							<input id="nome" name="nome" type="text" maxlength="50" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label" for="signupEmail">Genêro:</label>
							<select name="genero" id="genero" class="form-control">
							<option value="Ação">Ação</option>
							<option value="Animação">Animação</option>
							<option value="Aventura">Aventura</option>
							<option value="Comédia">Comédia</option>
							<option value="Documentário">Documentário</option>
							<option value="Fantasia">Fantasia</option>
							<option value="Faroeste">Faroeste</option>
							<option value="Ficção científica">Ficção científica</option>
							<option value="Guerra">Guerra</option>
							<option value="Musicais">Musicais</option>
							<option value="Romance">Romance</option>
							<option value="Suspense">Suspense</option>
							<option value="Terror">Terror</option>
							<option value="Tragédia/Drama">Tragédia/Drama</option>
							</select>
						</div>
						<div class="form-group ">
							<label class="control-label" for="signupEmail">Classificação Indicativa:</label>
							<!-- <input id="signupEmail" type="email" maxlength="50" class="form-control"> -->
							<select name="class" id="class" class="form-control">
							<option value="Livre">Livre</option>
							<option value="10 anos">10 anos</option>
							<option value="12 anos">12 anos</option>
							<option value="14 anos">14 anos</option>
							<option value="16 anos">16 anos</option>
							<option value="18 anos">18 anos</option>
							</select>
						</div>
						<div class="form-group">
							<label class="control-label" for="signupPassword">Valor:</label>
							<input id="valor" name="valor" type="number" maxlength="25" class="form-control" length="40">
						</div>
						<div class="form-group">
							<label class="control-label" for="url">Link do Cartaz:</label>
							<input id="url" name="url" type="url" class="form-control" length="40">
						</div>
						<div class="form-group">
							<label>Data/Hora:</label><br>
							<div class="input-group registration-date-time">
            				<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
            				<input class="form-control" name="registration_date" id="registration-date" type="date">
            				<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></span>
            				<input class="form-control" name="registration_time" id="registration-time" type="time">
            				<span class="input-group-btn">
                	    	</span>
                	    </div>
            			</div>
						<div class="form-group">
							<label for="comment">Sinópse:</label>
							<textarea class="form-control" name="comment" rows="5" id="comment"></textarea>
						</div>
						<div class="form-group">
							<button id="signupSubmit" type="submit" class="btn btn-info btn-block">Registrar Filme</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>