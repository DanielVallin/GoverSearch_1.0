<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cGrupo_Leyes extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Grupo_Leyes_Model");
		$this->load->library('export_excel');
	}

	public function index()
	{
		$data = array(
			'gpleyes' =>$this->Grupo_Leyes_Model->getGrupo_Model(),
	   );
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/01_Menu/vGrupo_Leyes/list", $data);
		$this->load->view("layouts/footer");
	}

	public function add()
	{
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/01_Menu/vGrupo_Leyes/add");
		$this->load->view("layouts/footer");
	}

	public function store(){
		$Nombre_de_Grupo = $this->input->post("Nombre_de_Grupo");
		$this->form_validation->set_rules("Nombre_de_Grupo","esta en uso, por lo que","required|is_unique[tbl_gpo_leyes.Nombre_de_Grupo]");
		
		if ($this->form_validation->run()==TRUE) {
			$data  = array(
				'Nombre_de_Grupo' => $Nombre_de_Grupo, 
				'Estado' => "1"
			);
				if ($this->Grupo_Leyes_Model->save($data)) {
					redirect(base_url()."00_Menu/cGrupo_Leyes");
				}else{
					$this->session->set_flashdata("error","No se pudo guardar la informacion");
					redirect(base_url()."00_Menu/cGrupo_Leyes/add");
				}
		}else{
			$this->add();
		}
	}

	public function edit($pk_Gpo_Ley)
	{
		$data = array(
			'leyes' => $this->Grupo_Leyes_Model->getGrupo_Modelid($pk_Gpo_Ley),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/01_Menu/vGrupo_Leyes/edit", $data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$pk_Gpo_Ley			= $this->input->post("pk_Gpo_Ley");
		$Nombre_de_Grupo	= $this->input->post("Nombre_de_Grupo");

		$leyactual = $this->Grupo_Leyes_Model->getGrupo_Modelid($pk_Gpo_Ley);

		if ($Nombre_de_Grupo == $leyactual->Nombre_de_Grupo) {
			$is_unique = "";
		}else{
			$is_unique = "|is_unique[tbl_gpo_leyes.Nombre_de_Grupo]";

		}

		$this->form_validation->set_rules("Nombre_de_Grupo","esta en uso, por lo que","required|is_unique[tbl_gpo_leyes.Nombre_de_Grupo]");
		
		if ($this->form_validation->run()==TRUE) {
			$data = array(
				'Nombre_de_Grupo' => $Nombre_de_Grupo,
			);
			if($this->Grupo_Leyes_Model->update($pk_Gpo_Ley, $data)){
				redirect(base_url()."00_Menu/cGrupo_Leyes");
			}else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."00_Menu/cGrupo_Leyes/edit/".$pk_Gpo_Ley);
			}
		}else{
			$this->edit($pk_Gpo_Ley);
		}
	}

	public function view($pk_Gpo_Ley){
		$data = array(
			'vista' => $this->Grupo_Leyes_Model->getGrupo_Modelid($pk_Gpo_Ley),
		);
		$this->load->view("admin/01_Menu/vGrupo_Leyes/view", $data);
	}

	public function delete($pk_Gpo_Ley){
		$data  = array(
			'Estado' => "0", 
		);
		$this->Grupo_Leyes_Model->update($pk_Gpo_Ley, $data);
		echo "00_Menu/cGrupo_Leyes";
	}

	

}