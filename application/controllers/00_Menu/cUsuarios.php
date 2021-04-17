<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cUsuarios extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("User_Model");
	}

	public function index()
	{
		$data = array(
			 'usuarios' =>$this->User_Model->getUsuarios(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/01_Menu/vUsuarios/list",$data);
		$this->load->view("layouts/footer");
	}

	public function add(){

	   $this->load->view("layouts/header");
	   $this->load->view("layouts/aside");
	   $this->load->view("admin/01_Menu/vUsuarios/add");
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
			$data  	= array(
				'Nombre' => $Nombre, 
				'Apellidos' => $Apellidos,
				'Telefono' => $Telefono,
				'Correo' => $Correo,
				'Usuario' => $Usuario,
				'Contrasena' => $Contrasena,
				'Fecha_Alta' => $Fecha_Alta,
				'User_Rol_pk' => $User_Rol_pk,
				'Estado' => "1"
			);
			if ($this->User_Model->save($data)) {
				redirect(base_url()."01_cCuenta/Usuarios");
			}else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."01_cCuenta/Usuarios/add");
			}
	}

}