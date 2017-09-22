<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends MY_Model {

	public $_table = "usuarios";

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function create()
	{
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
		);

		$res = $this->insert($data);
		return ($res) ? "true" : "false";
	}

	public function updateInfo($id = 0)
	{
		$data = array(
			'nombre' => $this->input->post('nombre'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
		);

		$res = $this->update($id, $data);
		return ($res) ? "true" : "false";
	}

	public function remove($id=0)
	{
		$this->delete($id);
	}

}

/* End of file Usuarios_model.php */
/* Location: ./application/models/Usuarios_model.php */