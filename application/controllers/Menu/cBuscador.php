<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cBuscador extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Ter_Clave_Model");
		//Aside Barra lateral.
		$this->load->model("Grupo_Leyes_Model");
		

		$this->load->model("Claves_Model");
		$this->load->model("Reg_Leyes_Model");
	}

	public function index()
	{
		//Llamar boton
		$clave = $this->input->post("clave");
		//Llamar boton para busqueda.
		if($this->input->post("buscar")){
				$clavename = $this->Ter_Clave_Model->getTerminobyClave($clave);
			}else{
				$clavename = $this->Ter_Clave_Model->getTermino();
			}
		//Llamar variables de otras tablas
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

	public function view($pk_Datos_ley){
		$data = array(
			'termino' => $this->Ter_Clave_Model->getTerminoid($pk_Datos_ley)
		);
		$this->load->view("admin/Menu/vBuscador/view",$data); 
	}

	

	
}
