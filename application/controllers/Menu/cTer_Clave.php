<?php defined('BASEPATH') OR exit('No direct script access allowed');

class cTer_Clave extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Ter_Clave_Model");

		$this->load->model("Claves_Model");
		$this->load->model("Reg_Leyes_Model");
		//Aside Barra lateral.
		$this->load->model("Grupo_Leyes_Model");
	}

	public function index()
	{
		$aside = array(
			'cGrupos' => $this->Grupo_Leyes_Model->getGrupo_Model()
		);
		$data = array(
			'terminos' =>$this->Ter_Clave_Model->getTermino(),
	   );
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside", $aside);
		$this->load->view("admin/Menu/vTer_Clave/list", $data);
		$this->load->view("layouts/footer");
	}

	public function add()
	{
		$data = array(
			'cClaves' =>$this->Claves_Model->getClave(),
			'regleyes' =>$this->Reg_Leyes_Model->getRegLey(),
	   );
		
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/Menu/vTer_Clave/add", $data);
		$this->load->view("layouts/footer");
	}

	public function store(){
		$Termino_Clave_pk 	= $this->input->post("Termino_Clave_pk");
		$Ley_pk 	= $this->input->post("Ley_pk");
		$Descripcion 	= $this->input->post("Descripcion");
		$Articulo 	= $this->input->post("Articulo");

		$this->form_validation->set_rules("Termino_Clave_pk","esta en uso, por lo que","required");
		$this->form_validation->set_rules("Ley_pk","esta en uso, por lo que","required");
		$this->form_validation->set_rules("Descripcion","esta en uso, por lo que","required");
		$this->form_validation->set_rules("Articulo","esta en uso, por lo que","required");

		if ($this->form_validation->run()==TRUE) {
			$data  		= array(
				'Termino_Clave_pk' => $Termino_Clave_pk,
				'Ley_pk' => $Ley_pk, 
				'Articulo' => $Articulo,
				'Descripcion' => $Descripcion, 
				'Estado' => "1"
			);
			if ($this->Ter_Clave_Model->save($data)) {
				redirect(base_url()."Menu/cTer_Clave");
			}else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."Menu/cTer_Clave/add");
			}
		}else{
			$this->add();
		}
	}

	public function edit($pk_Datos_ley)
	{
		$data = array(
			'terminos' =>$this->Ter_Clave_Model->getTerminoid($pk_Datos_ley),
			'cClaves' =>$this->Claves_Model->getClave(),
			'regleyes' =>$this->Reg_Leyes_Model->getRegLey(),
	   );
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/Menu/vTer_Clave/edit", $data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$pk_Datos_ley		= $this->input->post("pk_Datos_ley");
		$Termino_Clave_pk	= $this->input->post("Termino_Clave_pk");
		$Ley_pk				= $this->input->post("Ley_pk");
		$Descripcion	= $this->input->post("Descripcion");
		$Articulo			= $this->input->post("Articulo");

		$data = array(
			'pk_Datos_ley' 		=> $pk_Datos_ley,
			'Termino_Clave_pk' 	=> $Termino_Clave_pk,
			'Ley_pk' 			=> $Ley_pk,
			'Descripcion' 		=> $Descripcion,
			'Articulo' 			=> $Articulo,
		);
		if($this->Ter_Clave_Model->update($pk_Datos_ley, $data)){
			redirect(base_url()."Menu/cTer_Clave");
		}else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."Menu/cTer_Clave/edit/".$pk_Gpo_Ley);
		}
	}
}


