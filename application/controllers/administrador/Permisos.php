<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
        //Aside Barra lateral.
        $this->load->model("Grupo_Leyes_Model");
		
		$this->load->model("Permisos_Model");
        $this->load->model("User_Model");
		$this->load->model("Roles_Model");
	}

	public function index()
	{
		$aside = array(
			'cGrupos' =>$this->Grupo_Leyes_Model->getGrupo_Model(),
        );
        $permisos = array(
			'permisos' =>$this->Permisos_Model->getPermisos(),
            'usuarios' =>$this->User_Model->getUsuarios(),
        );
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside", $aside);
		$this->load->view("admin/Menu/permisos/list", $permisos);
		$this->load->view("layouts/footer");

	}

    public function add()
	{
		$aside = array(
			'cGrupos' =>$this->Grupo_Leyes_Model->getGrupo_Model(),
        );
        $data = array(
			'roles' =>$this->Roles_Model->getRoles(),
			'menus' =>$this->Permisos_Model->getMenus(),
        );
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside", $aside);
		$this->load->view("admin/Menu/permisos/add", $data);
		$this->load->view("layouts/footer");
	}

	public function store(){
		$rol 	= $this->input->post("rol");
		$read 	= $this->input->post("read");
		$insert 	= $this->input->post("insert");
		$update 	= $this->input->post("update");
		$delete 	= $this->input->post("delete");

			$data  		= array(
				'rol_pk' => $rol, 
				'read' => $read,
				'insert' => $insert,
				'update' => $update,
				'delete' => $delete
			);
			if ($this->Permisos_Model->save($data)) {
				redirect(base_url()."administrador/Permisos");
			}else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/Permisos/add");
			}
	}

	public function edit($pk_Permiso){
		$aside = array(
			'cGrupos' =>$this->Grupo_Leyes_Model->getGrupo_Model(),
        );
        $data = array(
			'roles' =>$this->Roles_Model->getRoles(),
			'menus' =>$this->Permisos_Model->getMenus(),
			'permiso' =>$this->Permisos_Model->getPermiso($pk_Permiso)
        );
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside", $aside);
		$this->load->view("admin/Menu/permisos/edit", $data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$pk_Permiso 	= $this->input->post("pk_Permiso");
		$rol 	= $this->input->post("rol");
		$read 	= $this->input->post("read");
		$insert 	= $this->input->post("insert");
		$update 	= $this->input->post("update");
		$delete 	= $this->input->post("delete");

			$data  		= array(
				'read' => $read,
				'insert' => $insert,
				'update' => $update,
				'delete' => $delete
			);
			if ($this->Permisos_Model->update($pk_Permiso, $data)) {
				redirect(base_url()."administrador/Permisos");
			}else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."administrador/Permisos/edit");
			}
	}

	public function delete($pk_Permiso){
		$this->Permisos_Model->delete($pk_Permiso);
		redirect(base_url()."administrador/permisos");
	}

}