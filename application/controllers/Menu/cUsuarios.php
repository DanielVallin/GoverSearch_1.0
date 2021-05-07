<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cUsuarios extends CI_Controller {


	public function __construct(){
		parent::__construct();

		//Aside Barra lateral.
		$this->load->model("Grupo_Leyes_Model");


		$this->load->model("User_Model");
		$this->load->model("Roles_Model");
	}

	public function index()
	{
		$aside = array(
			'cGrupos' => $this->Grupo_Leyes_Model->getGrupo_Model()
		);
		$data = array(
			 'usuarios' =>$this->User_Model->getUsuarios()
		);
			$this->load->view("layouts/header");
			$this->load->view("layouts/aside", $aside);
			$this->load->view("admin/Menu/vUsuarios/list",$data);
			$this->load->view("layouts/footer");
	}

	public function add()
	{
		$aside = array(
			'cGrupos' => $this->Grupo_Leyes_Model->getGrupo_Model()
		);
		$data = array(
			'roles' =>$this->Roles_Model->getRoles()
	   );
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside", $aside);
		$this->load->view("admin/Menu/vUsuarios/add", $data);
		$this->load->view("layouts/footer");
	}

	public function store(){
		$Nombre 	= $this->input->post("Nombre");
		$Apellidos 	= $this->input->post("Apellidos");
		$Telefono 	= $this->input->post("Telefono");
		$Correo 	= $this->input->post("Correo");
		$Usuario 	= $this->input->post("Usuario");
		$Contrasena = $this->input->post("Contrasena");
		$Fecha_Alta = $this->input->post("Fecha_Alta");
		$User_Rol_pk 	= $this->input->post("User_Rol_pk");

		$this->form_validation->set_rules("Nombre","Nombre","required");
		$this->form_validation->set_rules("Apellidos","Apellidos","required");
		$this->form_validation->set_rules("Telefono","Telefono","required");
		$this->form_validation->set_rules("Correo","Correo","required|is_unique[tbl_usuarios.Correo]");
		$this->form_validation->set_rules("Usuario","Usuario","required|is_unique[tbl_usuarios.Usuario]");
		$this->form_validation->set_rules("Contrasena","Contrasena","required");
		$this->form_validation->set_rules("Fecha_Alta","Fecha_Alta","required");
		$this->form_validation->set_rules("User_Rol_pk","User_Rol_pk","required");

			if ($this->form_validation->run()==TRUE) {
				$data  	= array(
					'Nombre' => $Nombre, 
					'Apellidos' => $Apellidos,
					'Telefono' => $Telefono,
					'Correo' => $Correo,
					'Usuario' => $Usuario,
					'Contrasena' => sha1($Contrasena),
					'Fecha_Alta' => $Fecha_Alta,
					'User_Rol_pk' => $User_Rol_pk,
					'Estado' => "1"
				);
				if ($this->User_Model->save($data)) {
					redirect(base_url()."Menu/cUsuarios");
				}else{
					$this->session->set_flashdata("error","No se pudo guardar la informacion");
					redirect(base_url()."Menu/cUsuarios/add");
				}
			}else{
				$this->add();
			}	
	}


	public function edit($pk_Usuario)
	{
		$aside = array(
			'cGrupos' => $this->Grupo_Leyes_Model->getGrupo_Model()
		);
		$data = array(
			'usuarios' =>$this->User_Model->getUsuario($pk_Usuario),
			'roles' =>$this->Roles_Model->getRoles(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside", $aside);
		$this->load->view("admin/Menu/vUsuarios/edit", $data);
		$this->load->view("layouts/footer");
	}

	public function update()
	{
		$pk_Usuario 	= $this->input->post("pk_Usuario");
		$Nombre 		= $this->input->post("Nombre");
		$Apellidos 		= $this->input->post("Apellidos");
		$Telefono 		= $this->input->post("Telefono");
		$Correo 		= $this->input->post("Correo");
		$Usuario 		= $this->input->post("Usuario");
		$Fecha_Alta 	= $this->input->post("Fecha_Alta");
		
		$User_Rol_pk 	= $this->input->post("User_Rol_pk");
		$Estado 		= $this->input->post("Estado");

			$usuarioactual = $this->User_Model->getUsuario($pk_Usuario);

			if ($Correo == $usuarioactual->Correo) {
				$is_unique = "";
			}else{
				$is_unique = "|is_unique[tbl_usuarios.Correo]";
			}
			if ($Usuario == $usuarioactual->Usuario) {
				$is_unique = "";
			}else{
				$is_unique = "|is_unique[tbl_usuarios.Usuario]";
			}

			$this->form_validation->set_rules("Nombre","Nombre","required");
			$this->form_validation->set_rules("Apellidos","Apellidos","required");
			$this->form_validation->set_rules("Telefono","Telefono","required");
			$this->form_validation->set_rules("Correo","Correo","required".$is_unique);
			$this->form_validation->set_rules("Usuario","Usuario","required".$is_unique);
			$this->form_validation->set_rules("Fecha_Alta","Fecha_Alta","required");
			$this->form_validation->set_rules("User_Rol_pk","User_Rol_pk","required");
			$this->form_validation->set_rules("Estado","Estado","required");

			if ($this->form_validation->run()==TRUE) {
				$data = array(
					'pk_Usuario' => $pk_Usuario,
					'Nombre' => $Nombre,
					'Apellidos' => $Apellidos,
					'Telefono' => $Telefono,
					'Correo' => $Correo,
					'Usuario' => $Usuario,
					'Fecha_Alta' => $Fecha_Alta,
					'User_Rol_pk' => $User_Rol_pk,
					'Estado' => $Estado,
				);
				if($this->User_Model->update($pk_Usuario, $data)){
					redirect(base_url()."Menu/cUsuarios");
				}else{
					$this->session->set_flashdata("error","No se pudo guardar la informacion");
					redirect(base_url()."Menu/cUsuarios/edit/".$pk_Usuario);
				}
			}else{
				$this->edit($pk_Usuario);
			}
	}


	public function view($pk_Usuario){
		$data = array(
			'usuario' => $this->User_Model->getUsuario($pk_Usuario),
		);
		$this->load->view("admin/Menu/vUsuarios/view",$data);
	}


		public function delete($pk_Usuario){
			$this->User_Model->delete($pk_Usuario);
			redirect(base_url()."Menu/cUsuarios");
		}
		
}