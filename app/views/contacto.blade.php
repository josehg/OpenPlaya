@extends('layout')

@section('content')
<div class="container">
	<h1>Contacta con nosotros</h1>
	<p>Para contactar con nosotros puedes escribirnos a <strong>team [at] openplaya.es</strong>, utilizar el siguiente formulario o visitarnos en <a href="#offices">nuestras oficinas</a>.
	<section class="row">
		<h2 class="col-md-2 col-md-offset-1">Contacto</h2>
		<div class="col-md-8">
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-4">
						<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
					</div>
				</div>
				<div class="form-group">
					<label for="inputNombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-4">
						<input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
					</div>
				</div>
				<div class="form-group">
					<label for="inputComentario" class="col-sm-2 control-label">Comentario</label>
					<div class="col-sm-6">
						<textarea class="form-control" id="inputComentario" rows="4"></textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-6">
						<button type="submit" class="btn btn-default">Enviar</button>
					</div>
				</div>
			</form>
		</div>
	</section>
	<hr>
	<section id="offices "class="row">
		<h2 class="col-md-2 col-md-offset-1">Oficinas</h2>
		<div class="col-md-8">
			<address>
				<strong>Open Playa</strong><br>
				795 Folsom Ave, Suite 600<br>
				San Francisco, CA 94107<br>
				<abbr title="Phone">P:</abbr> (123) 456-7890
			</address>
		</div>
	</section>
	<hr>
	@stop