<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$rules = array(
			array(
				'field' => 'email',
				'label' => 'Correo',
				'rules' => 'required'
			),
			array(
				'field' => 'password',
				'label' => 'password',
				'rules' => 'required'
			),
		);

		$this->load->library('form_validation');

		$this->form_validation->set_rules($rules);

		if ($this->form_validation->run() == TRUE){
			$this->load->model('Usuarios_model','usuarios_model');

			$condi = array(
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
			);

			$usuario = $this->usuarios_model->get_by($condi);

			if (count($usuario)){
				$data = array(
					'id' => $usuario->id,
					'nombre' => $usuario->nombre,
					'email' => $usuario->email,
					'loggedin' => TRUE,
				);
				$this->session->set_userdata($data);
				redirect('admin/panel','refresh');
			}
			else{
				$this->load->view('admin/vista_login');
			}
		}
		else {
			$this->load->view('admin/vista_login');
		}

	}


	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url());
	}

	public function logueado()
	{
		return (bool) $this->session->userdata('loggedin');
	}

}
