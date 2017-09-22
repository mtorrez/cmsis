<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->data['opcion'] = $this->uri->segment(2);
	}

	public function index()
	{

	}

}

/* End of file Admin_Controller.php */
/* Location: ./application/libraries/Admin_Controller.php */