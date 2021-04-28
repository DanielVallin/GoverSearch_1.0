<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cCuenta extends CI_Controller {

	public function index()
	{
		$data = array(
			'user' =>$this->User_Model->getUsergetUsuario(),
	   );
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/01_Menu/vCuenta/list");
		$this->load->view("layouts/footer");

	}
}