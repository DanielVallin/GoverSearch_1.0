<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cCat_Clave extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model("Cat_Clave_Model");
	}

	public function index()
	{
		$data = array(
			'cClaves' =>$this->Cat_Clave_Model->getClave(),
	   );
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/01_Menu/vCat_Clave/list", $data);
		$this->load->view("layouts/footer");

	}

	public function add()
	{
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/01_Menu/vCat_Clave/add");
		$this->load->view("layouts/footer");

	}
}