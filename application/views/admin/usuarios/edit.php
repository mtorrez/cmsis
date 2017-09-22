<h3><?php echo empty($registro->id) ? 'Nuevo usuario' : 'Modificar usuario '.$registro->nombre; ?> </h3>

<?php echo validation_errors(); ?>

<form action="" method="post" role="form">
	<div class="form-group">
		<label for="">Nombre</label>
		<input type="text" name="nombre" value="<?= $registro->nombre ?>" class="form-control">
	</div>
	<div class="form-group">
		<label for="">Correo</label>
		<input type="text" name="email" value="<?= $registro->email ?>" class="form-control">
	</div>
	<div class="form-group">
		<label for="">Contraseña</label>
		<input type="password" name="password" value="<?= $registro->password ?>" class="form-control">
	</div>
	<div class="form-group">
	     <button type="submit" class="btn btn-primary">Enviar</button>
	</div>

</form>
