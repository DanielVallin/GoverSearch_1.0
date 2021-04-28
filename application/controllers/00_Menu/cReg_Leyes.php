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
		$Grupo_pk = $this->input->post("Grupo_pk");

		$this->form_validation->set_rules("Nombre_de_Ley","esta en uso, por lo que","required|is_unique[tbl_leyes.Nombre_de_Ley]");
		$this->form_validation->set_rules("Grupo_pk","campo faltante","required");

		if ($this->form_validation->run()==TRUE) {
			$data  = array(
				'Nombre_de_Ley' 	 => $Nombre_de_Ley, 
				'Grupo_pk' 			 => $Grupo_pk, 
				'Estado' 			 => "1"
			);
	
			if ($this->Reg_Leyes_Model->save($data)) {
				redirect(base_url()."00_Menu/cReg_Leyes");
			}else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."00_Menu/cReg_Leyes/add");
			}
		}else{
			$this->add();
		}
		
	}

	public function edit($pk_Datos_Ley)
	{
		$data = array(
			'leyes' => $this->Reg_Leyes_Model->getClaveid($pk_Datos_Ley),
			'gpleyes' =>$this->Grupo_Leyes_Model->getGrupo_Model()
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/01_Menu/vReg_Leyes/edit", $data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$pk_Datos_Ley		= $this->input->post("pk_Datos_Ley");
		$Nombre_de_Ley		= $this->input->post("Nombre_de_Ley");
		$Grupo_pk			= $this->input->post("Grupo_pk");

		$leyactual = $this->Reg_Leyes_Model->getClaveid($pk_Datos_Ley);

		if ($Nombre_de_Ley == $leyactual->Nombre_de_Ley) {
			$is_unique = "";
		}else{
			$is_unique = "|is_unique[tbl_leyes.Nombre_de_Ley]";
		}
		$this->form_validation->set_rules("Nombre_de_Ley","Nombre de Ley","required".$is_unique);
		$this->form_validation->set_rules("Grupo_pk","Grupo_pk","required");

		if ($this->form_validation->run()==TRUE) {
			$data = array(
				'pk_Datos_Ley' 	=> $pk_Datos_Ley,
				'Nombre_de_Ley' => $Nombre_de_Ley,
				'Grupo_pk' 	=> $Grupo_pk,
			);
			if($this->Reg_Leyes_Model->update($pk_Datos_Ley, $data)){
				redirect(base_url()."00_Menu/cReg_Leyes");
			}else{
				$this->session->set_flashdata("error","No se pudo actualizar la informacion");
				redirect(base_url()."00_Menu/cReg_Leyes/edit/".$pk_Gpo_Ley);
			}
		}else{
			$this->edit($pk_Datos_Ley);
		}
	}



}