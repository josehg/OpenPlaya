@extends('layout')

@section('content')
<div class="jumbotron">
	<div class="container">
        <h1>Acerca de...</h1>
	</div>
</div>

<div class="container">
	<section class="row">
		<h2 class="col-md-2 col-md-offset-1">Sobre OpenPlaya</h2>
		<div class="col-md-8">
			<p><span><a href="http://openplaya.es"><strong>OpenPlaya</strong></a> es un directorio/buscador de playas Españolas que además proporciona datos de previsiones meteorológicas obtenidas de la web de la <a href="http://www.aemet.es/es/eltiempo/prediccion/playas">Agencia Estatal de Meteorologia</a>, imágenes de webcams en directo obtenidas tanto de fuentes públicas (<a href="http://www.gencat.cat/turistex_nou/webcams.htm">Generalitat de Catalunya</a>, <a href="http://www.comunitatvalenciana.com/webcam-comunidad-valenciana?k=6">Conselleria de Turisme de la Coumunitat Valenciana</a>) como privadas y por otro lado, se ofrecen listados y buscadores de equipamientos cercanos a la playa.</span></p>
			<p><span>Otro de las funcionalidades que oferece <a href="http://www.openplaya.es"></a><a href="http://www.openplaya.es"><a href="http://www.openplaya.es">www.openplaya.es</a></a> es un servicio de alertas cuándo se reunen las condiciones ideales para ir a la playa que se comunican al usuario suscrito mediante un correo electrónico.<br/><br/><strong>OpenPlaya</strong> se desarrolló en el marco del concurso <a href="http://www.abredatos.es/"><strong>Abredatos 2011</strong></a>, que consiste en el desarrollo exprés de una aplicación que utilice como mínimo una fuente de datos públicos con un tiempo límite de 48 horas.<br/><br/>El objetivo del concurso es generar debate en torno a la necesidad de que los organismos públicos proporcionen sus datos de forma accesible para permitir su uso y reutilización por parte de los ciudadanos.<br/><br/>El objetivo del concurso es generar debate en torno a la necesidad de que los organismos públicos proporcionen sus datos de forma accesible para permitir su uso y reutilización por parte de los ciudadanos.<br/><br/>El uso de los datos generados por la administración debería ser un derecho para cualquier ciudadano, ya que su producción se ha financiado con los impuestos de todos. Por otro lado, la explotación de los datos por parte de la sociedad genera usos creativos y servicios que la administración no tiene capacidad ni obligación de proporcionar, incrementado colectivamente el bien común.</span></p>

		</div>
	</section>
	<hr>
	<section class="row row-fluid">
		<h2 class="col-md-2 col-md-offset-1">Equipo</h2>
		<div class="col-md-2">
			<img class="img-circle" data-src="holder.js/140x140" alt="Generic placeholder image">
			<h3>Jose Hernandez</h3>
			<p>jose.jhg@gmail.com</p>
			<p><em><a href="http://twitter.com/josehg">@josehg</a></em></p>
		</div>
		<div class="col-md-2">
			<img class="img-circle" data-src="holder.js/140x140" alt="Generic placeholder image">
			<h3>Albert Férriz</h3>
			<p>mail@mail.com</p>
			<p><em><a href="http://twitter.com/albert_ferriz">@albert_ferriz</a></em></p>
		</div>
		<div class="col-md-2">
			<img class="img-circle" data-src="holder.js/140x140" alt="Generic placeholder image">
			<h3>Dani Martínez</h3>
			<p>mail@mail.com</p>
			<p><em><a href="http://twitter.com/danidmd86">@danidmd86</a></em></p>
		</div>
		<div class="col-md-2">
			<img class="img-circle" data-src="holder.js/140x140" alt="Generic placeholder image">
			<h3>Josep Valls</h3>
			<p>mail@mail.com</p>
			<p><em><a href="http://twitter.com/josepvalls">@josepvalls</a></em></p>
		</div>
	</section>
	<hr>
	@stop