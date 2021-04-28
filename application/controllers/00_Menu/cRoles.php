<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cRoles extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Roles_Model");
	}

	public function index()
	{
		$data = array(
			'roles' =>$this->Roles_Model->getRoles(),
	   );
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/01_Menu/vRoles/list", $data);
		$this->load->view("layouts/footer");
	}

	public function add(){

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/01_Menu/vRoles/add");
		$this->load->view("layouts/footer");
	 }

	 public function store(){
		$Nombre_Rol 	= $this->input->post("Nombre_Rol");
		$Descripcion 	= $this->input->post("Descripcion");

		$this->form_validation->set_rules("Nombre_Rol","esta en uso, por lo que","required|is_unique[tbl_roles.Nombre_Rol]");
		$this->form_validation->set_rules("Descripcion","esta en uso, por lo que","required");

		if ($this->form_validation->run()==TRUE) {
			$data  		= array(
				'Nombre_Rol' => $Nombre_Rol, 
				'Descripcion' => $Descripcion,
				'Estado' => "1"
			);
			if ($this->Roles_Model->save($data)) {
				redirect(base_url()."00_Menu/cRoles");
			}else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."00_Menu/cRoles/add");
			}
		}else{
			$this->add();
		}
	}


	public function edit($pk_Rol){
		$data = array(
			'rol' => $this->Roles_Model->getRol($pk_Rol),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/01_Menu/vRoles/edit",$data);
		$this->load->view("layouts/footer");
	 }


	 public function update(){
		$pk_Rol = $this->input->post("pk_Rol");
		$Nombre_Rol = $this->input->post("Nombre_Rol");
		$Descripcion = $this->input->post("Descripcion");

		$rolactual = $this->Roles_Model->getRol($pk_Rol);

		if ($Nombre_Rol == $rolactual->Nombre_Rol) {
			$is_unique = "";
		}else{
			$is_unique = "|is_unique[tbl_roles.Nombre_Rol]";
		}
		$this->form_validation->set_rules("Nombre_Rol","Nombre Rol","required".$is_unique);
		$this->form_validation->set_rules("Descripcion","Descripcion","required");

		if ($this->form_validation->run()==TRUE) {
			$data  = array(
				'Nombre_Rol' => $Nombre_Rol, 
				'Descripcion' => $Descripcion,
				'pk_Rol' => $pk_Rol,
			);
			if ($this->Roles_Model->update($pk_Rol,$data)) {
				redirect(base_url()."00_Menu/cRoles");
			}
			else{
				$this->session->set_flashdata("error","No se pudo actualizar la informacion");
				redirect(base_url()."00_Menu/cRoles/edit/".$idproducto);
			}
		}else{
			$this->edit($pk_Rol);
		}
	}

	public function view($pk_Rol){
		$data = array(
			'rol' => $this->Roles_Model->getRol($pk_Rol)
		);
		$this->load->view("admin/00_Menu/cRoles/view",$data);
	}
	
	public function delete($pk_Rol){
		$data = array(
			'Estado' => "0",
		);
		$this->Roles_Model->update($pk_Rol, $data);
		echo "00_Menu/cRoles";
	}

}