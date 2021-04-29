<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cBuscador extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Ter_Clave_Model");

		$this->load->model("Claves_Model");
		$this->load->model("Reg_Leyes_Model");
		$this->load->model("Grupo_Leyes_Model");
	}

	public function index()
	{
		$clave = $this->input->post("clave");

		if($this->input->post("buscar")){
			$clavename = $this->Ter_Clave_Model->getTerminobyClave($clave);
		}else{
			$clavename = $this->Ter_Clave_Model->getTermino();
		}

		$aside = array(
			'cGrupos' => $this->Grupo_Leyes_Model->getGrupo_Model()
		);
		$data = array(
			'terminos' => $clavename,
			'clave'		=> $clave
	   );
		
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside", $aside);
		$this->load->view("admin/Menu/vBuscador/list", $data);
		$this->load->view("layouts/footer");

	}

	
}
