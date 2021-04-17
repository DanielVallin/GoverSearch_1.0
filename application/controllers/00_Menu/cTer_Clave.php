<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cTer_Clave extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Ter_Clave_Model");
	}

	public function index()
	{
		$data = array(
			'terminos' =>$this->Ter_Clave_Model->getTermino(),
	   );
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/01_Menu/vTer_Clave/list", $data);
		$this->load->view("layouts/footer");

	}

	public function add()
	{
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/01_Menu/vTer_Clave/add");
		$this->load->view("layouts/footer");

	}
}