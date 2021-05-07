<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cGestion extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		//Aside Barra lateral.
		$this->load->model("Grupo_Leyes_Model");

		$this->load->model("User_Model");
		$this->load->model("Gestion_Model");
	}

	public function index()
	{
		$aside = array(
			'cGrupos' => $this->Grupo_Leyes_Model->getGrupo_Model()
		);
		$data = array(
			'cGestion' => $this->Gestion_Model->getGestiones()
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside", $aside);
		$this->load->view("admin/Menu/vGestion/list", $data);
		$this->load->view("layouts/footer");
	}

    public function add()
	{
		$aside = array(
			'cGrupos' => $this->Grupo_Leyes_Model->getGrupo_Model()
		);
		$data = array(
			'usuarios' =>$this->User_Model->getUsuarios()
	   );
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside", $aside);
		$this->load->view("admin/Menu/vGestion/add", $data);
		$this->load->view("layouts/footer");
	}

	public function store(){

			$Ley_pk 		= $this->input->post("Ley_pk");
			$Fecha 			= $this->input->post("Fecha");
			$FUltReforma 	= $this->input->post("FUltReforma");
			$FentradaVigo 	= $this->input->post("FentradaVigo");
			$EstLey 		= $this->input->post("EstLey");
			$ObjLey 		= $this->input->post("ObjLey");
			$TipoLey 		= $this->input->post("TipoLey");
			$Introduccion 	= $this->input->post("Introduccion");

			$Num_Articulo 	= $this->input->post("Num_Articulo");
			$Tipo 			= $this->input->post("Tipo");
			$Titulo 		= $this->input->post("Titulo");
			$Ref_Titulo 	= $this->input->post("Ref_Titulo");
			$NomTitulo 		= $this->input->post("NomTitulo");
			$Capitulo 		= $this->input->post("Capitulo");
			$Ref_Capitulo 	= $this->input->post("Ref_Capitulo");
			$NomCapitulo 	= $this->input->post("NomCapitulo");
			$Fraccion 		= $this->input->post("Fraccion");
			$Inciso 		= $this->input->post("Inciso");
			$Parrafo 		= $this->input->post("Parrafo");
			$Descripcion 	= $this->input->post("Descripcion");
			$UltReforma 	= $this->input->post("UltReforma");
			$Concepto 		= $this->input->post("Concepto");
			$Estatus 		= $this->input->post("Estatus");

			$this->form_validation->set_rules("Ley_pk","Ley_pk","required");
			$this->form_validation->set_rules("Fecha","Fecha","required");
			$this->form_validation->set_rules("FUltReforma","FUltReforma","required");
			$this->form_validation->set_rules("FentradaVigo","FentradaVigo","required");
			$this->form_validation->set_rules("EstLey","EstLey","required");
			$this->form_validation->set_rules("ObjLey","ObjLey","required");
			$this->form_validation->set_rules("TipoLey","TipoLey","required");
			$this->form_validation->set_rules("Introduccion","Introduccion","required");

			$this->form_validation->set_rules("Num_Articulo","Num_Articulo","required|is_unique[tbl_gestion.Num_Articulo]");

				if ($this->form_validation->run()==TRUE) {
					$data  	= array(
						'Ley_pk' 		=> $Ley_pk, 
						'Fecha' 		=> $Fecha,
						'FUltReforma' 	=> $FUltReforma,
						'FentradaVigo' 	=> $FentradaVigo,
						'EstLey' 		=> $EstLey,
						'ObjLey' 		=> $ObjLey,
						'TipoLey' 		=> $TipoLey,
						'Introduccion' 	=> $Introduccion,

						'Num_Articulo' 	=> $Num_Articulo, 
						'Tipo' 			=> $Tipo,
						'Titulo' 		=> $Titulo,
						'Ref_Titulo' 	=> $Ref_Titulo,
						'NomTitulo' 	=> $NomTitulo,
						'Capitulo' 		=> $Capitulo,
						'Ref_Capitulo' 	=> $Ref_Capitulo,
						'NomCapitulo' 	=> $NomCapitulo,
						'Fraccion' 		=> $Fraccion,
						'Inciso' 		=> $Inciso,
						'Parrafo' 		=> $Parrafo,
						'Descripcion' 	=> $Descripcion,
						'UltReforma' 	=> $UltReforma,
						'Concepto' 		=> $Concepto,
						'Estatus' 		=> $Estatus,
						'Estado' 		=> "1"
					);
					if ($this->Gestion_Model->save($data)) {
						redirect(base_url()."Menu/cGestion");
					}else{
						$this->session->set_flashdata("error","No se pudo guardar la informacion");
						redirect(base_url()."Menu/cGestion/add", $data);
					}
				}else{
					$this->add();
				}	
	}
	

}