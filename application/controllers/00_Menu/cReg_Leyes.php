<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cReg_Leyes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Reg_Leyes_Model");
	}

	public function index()
	{
		$data = array(
			'regleyes' =>$this->Reg_Leyes_Model->getRegLey(),
	   );
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/01_Menu/vReg_Leyes/list", $data);
		$this->load->view("layouts/footer");

	}

	public function add()
	{
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/01_Menu/vReg_Leyes/add");
		$this->load->view("layouts/footer");

	}


}