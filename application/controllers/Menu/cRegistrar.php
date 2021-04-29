<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cRegistrar extends CI_Controller {

	public function index()
	{
		$this->load->view("admin/Menu/vRegistrar/Registrar");
	}
}