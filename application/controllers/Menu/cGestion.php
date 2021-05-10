<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cGestion extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		//Aside Barra lateral.
		$this->load->model("Grupo_Leyes_Model");

		$this->load->model("User_Model");
		$this->load->model("Gestion_Model");
		$this->load->model("Reg_Leyes_Model");
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

			'leyes' =>$this->Reg_Leyes_Model->getRegLey()
	   );
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside", $aside);
		$this->load->view("admin/Menu/vGestion/add", $data);
		$this->load->view("layouts/footer");
	}

	public function store()
	{
			$Ley_pk 		= $this->input->post("Ley_pk");
			$Fecha 			= $this->input->post("Fecha");
			$FUltReforma 	= $this->input->post("FUltReforma");
			$FEntradaVigo 	= $this->input->post("FEntradaVigo");
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
			$this->form_validation->set_rules("FEntradaVigo","FEntradaVigo","required");
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
						'FEntradaVigo' 	=> $FEntradaVigo,
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
	

	public function edit($pk_Gestionid)
	{
		$aside = array(
			'cGrupos' => $this->Grupo_Leyes_Model->getGrupo_Model(),
		);
		$data = array(
			'leyes' =>$this->Reg_Leyes_Model->getRegLey(),
			'gestion' => $this->Gestion_Model->getGestion($pk_Gestionid),
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside", $aside);
		$this->load->view("admin/Menu/vGestion/edit", $data);
		$this->load->view("layouts/footer");
	}

	public function update(){
		$Ley_pk			= $this->input->post("Ley_pk");
		$Fecha			= $this->input->post("Fecha");
		$FUltReforma	= $this->input->post("FUltReforma");
		$FEntradaVigo	= $this->input->post("FEntradaVigo");
		$ObjLey			= $this->input->post("pk_Gpo_Ley");
		$TipoLey		= $this->input->post("TipoLey");
		$Introduccion	= $this->input->post("Introduccion");

		$Num_Articulo	= $this->input->post("Num_Articulo");
		$Tipo			= $this->input->post("Tipo");
		$Titulo			= $this->input->post("Titulo");
		$Ref_Titulo		= $this->input->post("Ref_Titulo");
		$NomTitulo		= $this->input->post("NomTitulo");
		$Capitulo		= $this->input->post("Capitulo");
		$Ref_Capitulo	= $this->input->post("Ref_Capitulo");
		$NomCapitulo	= $this->input->post("NomCapitulo");
		$Fraccion		= $this->input->post("Fraccion");
		$Inciso			= $this->input->post("Inciso");
		$Parrafo		= $this->input->post("Parrafo");
		$Descripcion	= $this->input->post("Descripcion");
		$UltReforma		= $this->input->post("UltReforma");
		$Concepto		= $this->input->post("Concepto");
		$Estatus		= $this->input->post("Estatus");
		$Estado			= $this->input->post("Estado");

				$data = array(
					'Num_Articulo' => $Num_Articulo,
				);
				if($this->Gestion_Model->update($Ley_pk, $data)){
					redirect(base_url()."Menu/cGestion");
				}else{
					$this->session->set_flashdata("error","No se pudo guardar la informacion");
					redirect(base_url()."Menu/cGestion/edit/".$Ley_pk);
				}
	}
	

}