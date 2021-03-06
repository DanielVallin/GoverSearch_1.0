<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cClaves extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
		//Aside Barra lateral.
		$this->load->model("Grupo_Leyes_Model");

		$this->load->model("Claves_Model");
		$this->load->model("User_Model");
	}

	//---------------------------------  VISTAS ----------------------------------------------------------------------------
	public function index()
	{
		$aside = array(
			'cGrupos' => $this->Grupo_Leyes_Model->getGrupo_Model(),
		);
		$data = array(
			'cClaves' =>$this->Claves_Model->getClave(),
	   );
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside", $aside);
		$this->load->view("admin/Menu/vClaves/list", $data);
		$this->load->view("layouts/footer");
	}

	public function add()
	{
		$aside = array(
			'cGrupos' => $this->Grupo_Leyes_Model->getGrupo_Model()
		);
		$data = array(
			 'usuarios' =>$this->User_Model->getUsuarios(),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside", $aside);
		$this->load->view("admin/Menu/vClaves/add", $data);
		$this->load->view("layouts/footer");
	}
	public function edit($pk_Ter_Clave)
	{
		$aside = array(
			'cGrupos' => $this->Grupo_Leyes_Model->getGrupo_Model()
		);
		$data = array(
			'usuarios' =>$this->User_Model->getUsuarios(),
			'claves' => $this->Claves_Model->getClaveid($pk_Ter_Clave),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside", $aside);
		$this->load->view("admin/Menu/vClaves/edit", $data);
		$this->load->view("layouts/footer");
	}
	//---------------------------------  METODOS ----------------------------------------------------------------------------

	public function store(){
		$Termino_Clave 	= $this->input->post("Termino_Clave");
		$Usuario_pk 	= $this->input->post("Usuario_pk");
		$Fecha_Alta 	= $this->input->post("Fecha_Alta");

		$this->form_validation->set_rules("Termino_Clave","Termino Clave","required|is_unique[tbl_claves.Termino_Clave]");
		$this->form_validation->set_rules("Usuario_pk","Usuario","required");
		$this->form_validation->set_rules("Fecha_Alta","Fecha de Alta","required");

			if ($this->form_validation->run()==TRUE) {
				$data  		= array(
					'Termino_Clave' => $Termino_Clave, 
					'Usuario_pk' => $Usuario_pk,
					'Fecha_Alta' => $Fecha_Alta,
					'Estado' => "1"
				);
				if ($this->Claves_Model->save($data)) {
					redirect(base_url()."Menu/cClaves");
				}else{
					$this->session->set_flashdata("error","No se pudo guardar la informacion");
					redirect(base_url()."Menu/cClaves/add");
				}
			}else{
				$this->add();
			}
	}

	
	public function update(){
		$pk_Ter_Clave	= $this->input->post("pk_Ter_Clave");
		$Termino_Clave	= $this->input->post("Termino_Clave");
		$Usuario_pk		= $this->input->post("Usuario_pk");
		$Fecha_Alta		= $this->input->post("Fecha_Alta");

		$claveactual = $this->Claves_Model->getClaveid($pk_Ter_Clave);

			if ($Termino_Clave == $claveactual->Termino_Clave) {
				$is_unique = "";
					}else{
						$is_unique = "|is_unique[tbl_claves.Termino_Clave]";
					}
				$this->form_validation->set_rules("Termino_Clave","Termino Clave","required".$is_unique);
				$this->form_validation->set_rules("Usuario_pk","Usuario","required");
				$this->form_validation->set_rules("Fecha_Alta","Fecha de Alta","required");

					if ($this->form_validation->run()==TRUE) {
						$data = array(
							'pk_Ter_Clave' => $pk_Ter_Clave,
							'Termino_Clave' => $Termino_Clave,
							'Usuario_pk' => $Usuario_pk,
							'Fecha_Alta' => $Fecha_Alta,
							);
						if($this->Claves_Model->update($pk_Ter_Clave, $data)){
							redirect(base_url()."Menu/cClaves");
						}else{
							$this->session->set_flashdata("error","No se pudo guardar la informacion");
							redirect(base_url()."Menu/cClaves/edit/".$pk_Ter_Clave);
					}
			}else{
				$this->edit($pk_Ter_Clave);
			}
	}

	public function view($pk_Ter_Clave){
		$data = array(
			'vista' => $this->Claves_Model->getClaveid($pk_Ter_Clave),
		);
		$this->load->view("admin/Menu/vClaves/view", $data);
	}

	
	public function delete($pk_Ter_Clave){
		$data  = array(
			'Estado' => "0", 
		);
		$this->Claves_Model->update($pk_Ter_Clave, $data);
		echo "Menu/cClaves";
	}
}