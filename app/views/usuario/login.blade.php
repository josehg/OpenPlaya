@extends('layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6 .col-md-offset-2">
			<h1>Entrar a tu cuenta</h1>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3 col-md-offset-1">
			<div class="form-group">
				<button type="button" class="btn btn-info btn-lg btn-block ">Login con Twitter</button>
				</div>
			<div class="form-group">
				<button type="button" class="btn btn-primary btn-lg btn-block">Login con Facebook</button>
				</div>
				<div class="form-group">
				<p>No tienes cuenta? <a href="/usuario/registro">Date de alta</a>.
					</div>
		</div>
		<div class="col-md-5 col-md-offset-1">


			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
					<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
					<div class="col-sm-10">
						<input type="password" class="form-control" id="inputPassword3" placeholder="Password">
					</div>
				</div>
				<a class="col-md-10 col-md-offset-2" href="/usuario/recordar/">Has ovlidado tu contraseña?</a>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<div class="checkbox">
							<label>
								<input type="checkbox"> Recordar cuenta
							</label>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-default">Entrar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<hr>
	@stop