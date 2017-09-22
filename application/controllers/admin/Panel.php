<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function index()
	{
		//$reg = $this->load->model('Usuarios_model');
		$this->data['contenido'] = 'admin/vista_panel';
		$this->load->view('admin/plantilla',$this->data);
	}

}

/* End of file Panel.php */
/* Location: ./application/controllers/admin/Panel.php */