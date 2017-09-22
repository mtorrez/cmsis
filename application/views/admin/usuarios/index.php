	<a href="<?= base_url() ?>admin/usuarios/edit" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nuevo usuario</a>

	<table class="table table-stripped">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Correo</th>
				<th></th>
				<th></th>
			</tr>
			<tbody>
				<?php foreach ($registros as $fila): ?>
					<tr>
						<td><?php echo $fila->nombre; ?></td>
						<td><?php echo $fila->email; ?></td>
						<td><a href="<?= base_url() ?>admin/usuarios/edit/<?= $fila->id ?>"><span class="glyphicon glyphicon-edit"></span></a></td>
						<td><a href="<?= base_url() ?>admin/usuarios/delete/<?= $fila->id ?>" onclick="return confirm('Esta seguro??')"><span class="glyphicon glyphicon-trash"></span></a></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</thead>
	</table>