<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cPagos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Pagos_Model");
		$this->load->model("User_Model");
	}

	public function index()
	{
		$data = array(
			'pagos' =>$this->Pagos_Model->getPagos(),
	   );
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/01_Menu/vPagos/list", $data);
		$this->load->view("layouts/footer");

	}

	public function add()
	{
		$data = array(
			'usuarios' =>$this->User_Model->getUsuarios(),
	   );
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/01_Menu/vPagos/add", $data);
		$this->load->view("layouts/footer");

	}

}