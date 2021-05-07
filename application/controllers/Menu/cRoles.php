<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cRoles extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Roles_Model");
		//Aside Barra lateral.
		$this->load->model("Grupo_Leyes_Model");
	}

	public function index()
	{
		$aside = array(
			'cGrupos' => $this->Grupo_Leyes_Model->getGrupo_Model()
		);
		$data = array(
			'roles' =>$this->Roles_Model->getRoles(),
	   );
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside", $aside);
		$this->load->view("admin/Menu/vRoles/list", $data);
		$this->load->view("layouts/footer");
	}

	public function add()
	{
		$aside = array(
			'cGrupos' => $this->Grupo_Leyes_Model->getGrupo_Model()
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside", $aside);
		$this->load->view("admin/Menu/vRoles/add");
		$this->load->view("layouts/footer");
	 }

							public function store(){
								
								$Nombre_Rol 	= $this->input->post("Nombre_Rol");
								$Descripcion 	= $this->input->post("Descripcion");

								$this->form_validation->set_rules("Nombre_Rol","esta en uso, por lo que","required|is_unique[tbl_roles.Nombre_Rol]");
								$this->form_validation->set_rules("Descripcion","esta en uso, por lo que","required");

								if ($this->form_validation->run()==TRUE) {
									$data  		= array(
										'Nombre_Rol' 	=> $Nombre_Rol, 
										'Descripcion' 	=> $Descripcion,
										'Estado' 		=> "1"
									);
									if ($this->Roles_Model->save($data)) {
										redirect(base_url()."Menu/cRoles");
									}else{
										$this->session->set_flashdata("error","No se pudo guardar la informacion");
										redirect(base_url()."Menu/cRoles/add");
									}
								}else{
									$this->add();
								}
							}


	public function edit($pk_Rol)
	{
		$aside = array(
			'cGrupos' => $this->Grupo_Leyes_Model->getGrupo_Model()
		);
		$data = array(
			'rol' => $this->Roles_Model->getRol($pk_Rol),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside", $aside);
		$this->load->view("admin/Menu/vRoles/edit",$data);
		$this->load->view("layouts/footer");
	 }


							public function update(){
								$pk_Rol 		= $this->input->post("pk_Rol");
								$Nombre_Rol 	= $this->input->post("Nombre_Rol");
								$Descripcion 	= $this->input->post("Descripcion");
								$Estado 		= $this->input->post("Estado");
			

								$rolactual = $this->Roles_Model->getRol($pk_Rol);

								if ($Nombre_Rol == $rolactual->Nombre_Rol) {
									$is_unique = "";
								}else{
									$is_unique = "|is_unique[tbl_roles.Nombre_Rol]";
								}
								$this->form_validation->set_rules("Nombre_Rol","Nombre Rol","required".$is_unique);
								$this->form_validation->set_rules("Descripcion","Descripcion","required");
								$this->form_validation->set_rules("Estado","Estado","required");

								if ($this->form_validation->run()==TRUE) {
									$data  = array(
										'pk_Rol' => $pk_Rol,
										'Nombre_Rol' => $Nombre_Rol, 
										'Descripcion' => $Descripcion,
										'Estado' => $Estado,
									);
									if ($this->Roles_Model->update($pk_Rol,$data)) {
										redirect(base_url()."Menu/cRoles");
									}
									else{
										$this->session->set_flashdata("error","No se pudo actualizar la informacion");
										redirect(base_url()."Menu/cRoles/edit/".$idproducto);
									}
								}else{
									$this->edit($pk_Rol);
								}
							}

	public function view($pk_Rol){
		$data = array(
			'rol' => $this->Roles_Model->getRol($pk_Rol)
		);
		$this->load->view("admin/Menu/cRoles/view",$data);
	}
	
	public function delete($pk_Rol){
		$this->Roles_Model->delete($pk_Rol);
		redirect(base_url()."Menu/cRoles");
	}

}