<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cGestion extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//Aside Barra lateral.
		$this->load->model("Grupo_Leyes_Model");
	}

	public function index()
	{
		$aside = array(
			'cGrupos' => $this->Grupo_Leyes_Model->getGrupo_Model()
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside", $aside);
		$this->load->view("admin/Menu/vGestion/list");
		$this->load->view("layouts/footer");
	}
    public function add()
	{
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/Menu/vGestion/add");
		$this->load->view("layouts/footer");

	}
}