<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Usuarios_model','usuarios_model');
	}

	// List all your items
	public function index()
	{
		$this->data['registros'] = $this->usuarios_model->get_all();

		$this->data['contenido'] = 'admin/usuarios/index';
		$this->load->view('admin/plantilla', $this->data);
	}

	// Add a new item
	public function edit($id = null)
	{
		if ($id){
			$this->data['registro'] = $this->usuarios_model->get($id);
		}
		else{
			$this->data['registro'] = $this->usuarios_model->get_new();
		}

		$rules = array(
			array('field' => 'nombre', 'label' => 'Nombre', 'rules' => 'required'),
			array('field' => 'email', 'label' => 'Correo', 'rules' => 'required|valid_email'),
			array('field' => 'password', 'label' => 'Clave', 'rules' => 'required'),
		);

		$this->load->library('form_validation');

		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == TRUE){
			if ($id){
				$status = $this->usuarios_model->updateInfo($id);
			}
			else {
				$status = $this->usuarios_model->create();
			}
			redirect('admin/usuarios','refresh');
		}
		else{
			var_dump($this->form_validation->run());
			//$reg = $this->load->model('Usuarios_model');
			$this->data['contenido'] = 'admin/usuarios/edit';
			$this->load->view('admin/plantilla',$this->data);
		}
	}

	//Delete one item
	public function delete( $id = NULL )
	{
		$this->usuarios_model->remove($id);
		redirect('admin/usuarios','refresh');
	}
}

/* End of file Usuarios.php */
/* Location: ./application/controllers/Usuarios.php */
