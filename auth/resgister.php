<?php
include '../header-footer/header.php';

?>

    <div class="container col-md-offset-3 col-md-4">
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-body">
					<form method="POST" action="redirect" role="form">
						<div class="form-group">
							<h2>Registrar Usuário</h2>
						</div>
						<div class="form-group">
							<label class="control-label" for="signupName">Seu Nome:</label>
							<input id="nome" name="nome" type="text" maxlength="50" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label" for="signupName">Seu E-mail:</label>
							<input id="email" name="email" type="email" maxlength="50" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label" for="signupName">Sua Senha:</label>
							<input id="senha" name="senha" type="password" maxlength="50" class="form-control">
						</div>
						<div class="form-group">
							<button id="signupSubmit" type="submit" class="btn btn-info btn-block">Registrar Me.</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>