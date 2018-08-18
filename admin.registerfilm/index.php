<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <div class="container col-md-offset-3 col-md-4">
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-body">
					<form method="POST" action="#" role="form">
						<div class="form-group">
							<h2>Criar Conta</h2>
						</div>
						<div class="form-group">
							<label class="control-label" for="signupName">Nome do Filme:</label>
							<input id="signupName" type="text" maxlength="50" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label" for="signupEmail">Genêro:</label>
							<!-- <input id="signupEmail" type="email" maxlength="50" class="form-control"> -->
							<select name="cars" class="form-control">
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
							<select name="cars" class="form-control">
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
							<input id="number" type="number" maxlength="25" class="form-control" length="40">
						</div>
						<div class="form-group registration-date">
							<label class="control-label col-sm-3" for="registration-date">Date:</label>
            				<div class="input-group registration-date-time">
            				<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
            				<input class="form-control" name="registration_date" id="registration-date" type="date">
            				<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></span>
            				<input class="form-control" name="registration_time" id="registration-time" type="time">
            				<span class="input-group-btn">
                   			</span>
						</div>
						<div class="form-group">
							<button id="signupSubmit" type="submit" class="btn btn-info btn-block">Create your account</button>
						</div>
						<p class="form-group">By creating an account, you agree to our <a href="#">Terms of Use</a> and our <a href="#">Privacy Policy</a>.</p>
						<hr>
						<p></p>Already have an account? <a href="#">Sign in</a></p>
					</form>
				</div>
			</div>
		</div>
	</div>

<div class="container" style="margin-top:70px;">
	<div class="row">
        <form class="form-horizontal col-sm-7 col-sm-offset-2" action="" method="post">
            <div class="form-group registration-date">
                <label class="control-label col-sm-3" for="registration-date">Date:</label>
            	<div class="input-group registration-date-time">
            		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></span>
            		<input class="form-control" name="registration_date" id="registration-date" type="date">
            		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></span>
            		<input class="form-control" name="registration_time" id="registration-time" type="time">
            		<span class="input-group-btn">
                    </span>
            	</div>
            </div>
        </form>
	</div>
</div>