<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cPagos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Pagos_Model");
		$this->load->model("User_Model");
		//Aside Barra lateral.
		$this->load->model("Grupo_Leyes_Model");
	
	}

	public function index()
	{
		$fechainicio = $this->input->post("fechainicio");
		$fechafin = $this->input->post("fechafin");

		if($this->input->post("buscar")){
			$pagos = $this->Pagos_Model->getPagosbyDate($fechainicio, $fechafin);
		}else{
			$pagos = $this->Pagos_Model->getPagos();
		}

		
		$aside = array(
			'cGrupos' => $this->Grupo_Leyes_Model->getGrupo_Model()
		);
		$data = array(
			'pagos' => $pagos,
			'fechainicio' => $fechainicio,
			'fechafin' => $fechafin
	   );
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside", $aside);
		$this->load->view("admin/Menu/vPagos/list", $data);
		$this->load->view("layouts/footer");

	}

	public function add()
	{
		$data = array(
			'usuarios' =>$this->User_Model->getUsuarios(),
	   );
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/Menu/vPagos/add", $data);
		$this->load->view("layouts/footer");
	}

}