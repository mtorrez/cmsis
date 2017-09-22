<?php
$this->load->view('admin/_components/header', $this->data);
?>
<div class="container principal">
	<div class="row">
	<div class="col-xs-9">
		<?php $this->load->view($contenido, $this->data); ?>
	</div>
	<div class="col-xs-3">
		<section>
			<a href="#"><i class="icon-user"></i> admin@admin.com</a>
			<br>
			<a href="<?= site_url() ?>login/logout"><i class="icon-off"></i> Salir</a>
		</section>
	</div>
	</div>
</div>
<?php
$this->load->view('admin/_components/footer', $this->data);
?>