<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>CMS IS</title>

	<!-- Bootstrap -->
	<link href="<?= site_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= site_url() ?>assets/css/estilos.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>
	<!-- Fixed navbar -->
	<header>
	<div class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">CMS Sistemas</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<?php $cade = ' class="active"'; ?>
				<li<?= ($opcion == 'panel') ? $cade : '' ?>><a href="<?= site_url() ?>admin/panel">Panel de administracion</a></li>
				<li<?= ($opcion == 'paginas') ? $cade : '' ?>><a href="<?= site_url() ?>admin/paginas">Paginas</a></li>
				<li<?= ($opcion == 'noticias') ? $cade : '' ?>><a href="<?= site_url() ?>admin/noticias">Noticias</a></li>
				<li<?= ($opcion == 'usuarios') ? $cade : '' ?>><a href="<?= site_url() ?>admin/usuarios">Usuarios</a></li>
			</ul>
		</div><!--/.nav-collapse -->
    </div>
	</header>