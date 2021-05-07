<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cCuenta extends CI_Controller {


	//---------------------------------  VISTAS ----------------------------------------------------------------------------
	public function index()
	{

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/Menu/vCuenta/list");
		$this->load->view("layouts/footer");

	}
	//---------------------------------  METODOS ----------------------------------------------------------------------------


}