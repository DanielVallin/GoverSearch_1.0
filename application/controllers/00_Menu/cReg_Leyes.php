<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cReg_Leyes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Reg_Leyes_Model");
		$this->load->model("Grupo_Leyes_Model");
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
		$data = array(
			'gpleyes' =>$this->Grupo_Leyes_Model->getGrupo_Model()
	   );
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/01_Menu/vReg_Leyes/add", $data);
		$this->load->view("layouts/footer");

	}

	public function store(){
		$Nombre_de_Ley = $this->input->post("Nombre_de_Ley");
		$Numero_de_Articulo = $this->input->post("Numero_de_Articulo");
		$Detalle_Art = $this->input->post("Detalle_Art");
		$Grupo_pk = $this->input->post("Grupo_pk");

		$data  = array(
			'Nombre_de_Ley' => $Nombre_de_Ley, 
			'Numero_de_Articulo' => $Numero_de_Articulo, 
			'Detalle_Art' => $Detalle_Art, 
			'Grupo_pk' => $Grupo_pk, 
			'Estado' => "1"
		);

		if ($this->Reg_Leyes_Model->save($data)) {
			redirect(base_url()."00_Menu/cReg_Leyes");
		}else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."00_Menu/cReg_Leyes/add");
		}
	}


}