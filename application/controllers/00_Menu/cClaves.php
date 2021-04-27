<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cClaves extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->load->model("Claves_Model");
		$this->load->model("User_Model");
	}

	public function index()
	{
		$data = array(
			'cClaves' =>$this->Claves_Model->getClave(),
	   );
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/01_Menu/vClaves/list", $data);
		$this->load->view("layouts/footer");

	}

	public function add()
	{
		$data = array(
			 'usuarios' =>$this->User_Model->getUsuarios(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/01_Menu/vClaves/add", $data);
		$this->load->view("layouts/footer");
	}

	public function store(){
		$Termino_Clave 	= $this->input->post("Termino_Clave");
		$Usuario_pk 	= $this->input->post("Usuario_pk");
		$Fecha_Alta 	= $this->input->post("Fecha_Alta");

		$this->form_validation->set_rules("Termino_Clave","esta en uso, por lo que","required|is_unique[tbl_claves.Termino_Clave]");
		$this->form_validation->set_rules("Usuario_pk","esta en uso, por lo que","required");
		$this->form_validation->set_rules("Fecha_Alta","esta en uso, por lo que","required");

		if ($this->form_validation->run()==TRUE) {
			$data  		= array(
				'Termino_Clave' => $Termino_Clave, 
				'Usuario_pk' => $Usuario_pk,
				'Fecha_Alta' => $Fecha_Alta,
				'Estado' => "1"
			);
			if ($this->Claves_Model->save($data)) {
				redirect(base_url()."00_Menu/cClaves");
			}else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."00_Menu/cClaves/add");
			}
		}else{
			$this->add();
		}
	}

	public function edit($pk_Ter_Clave)
	{
		$data = array(
			'claves' => $this->Claves_Model->getClaveid($pk_Ter_Clave),
			'usuarios' =>$this->User_Model->getUsuarios(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/01_Menu/vClaves/edit", $data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$pk_Ter_Clave	= $this->input->post("pk_Ter_Clave");
		$Termino_Clave	= $this->input->post("Termino_Clave");
		$Usuario_pk		= $this->input->post("Usuario_pk");
		$Fecha_Alta		= $this->input->post("Fecha_Alta");

		$data = array(
			'pk_Ter_Clave' => $pk_Ter_Clave,
			'Termino_Clave' => $Termino_Clave,
			'Usuario_pk' => $Usuario_pk,
			'Fecha_Alta' => $Fecha_Alta,
		);
		if($this->Claves_Model->update($pk_Ter_Clave, $data)){
			redirect(base_url()."00_Menu/cClaves");
		}else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."00_Menu/cClaves/edit/".$pk_Ter_Clave);
		}
	}

	public function view($pk_Ter_Clave){
		$data = array(
			'vista' => $this->Claves_Model->getClaveid($pk_Ter_Clave),
		);
		$this->load->view("admin/01_Menu/vClaves/view", $data);
	}

	public function delete($pk_Ter_Clave){
		$data  = array(
			'Estado' => "0", 
		);
		$this->Claves_Model->update($pk_Ter_Clave, $data);
		echo "00_Menu/cClaves";
	}
}