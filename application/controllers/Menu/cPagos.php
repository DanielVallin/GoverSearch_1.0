<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cPagos extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		//Aside Barra lateral.
		$this->load->model("Grupo_Leyes_Model");
		//Tablas
		$this->load->model("Pagos_Model");
		$this->load->model("User_Model");
	
	}

	public function index()
	{
		$fechainicio = $this->input->post("fechainicio");
		$fechafin = $this->input->post("fechafin");

			if($this->input->post("buscar")){
				$pagos = $this->Pagos_Model->getPagosbyDate($fechainicio, $fechafin);
			}else{
				$pagos = $this->Pagos_Model->getPagos();
			}

		
				$aside = array(
					'cGrupos' => $this->Grupo_Leyes_Model->getGrupo_Model()
				);
				$data = array(
					'pagos' => $pagos,
					'fechainicio' => $fechainicio,
					'fechafin' => $fechafin
				);
				$this->load->view("layouts/header");
				$this->load->view("layouts/aside", $aside);
				$this->load->view("admin/Menu/vPagos/list", $data);
				$this->load->view("layouts/footer");
	}

	public function add()
	{
		$aside = array(
			'cGrupos' => $this->Grupo_Leyes_Model->getGrupo_Model(),
		);
		$data = array(
			'usuarios' => $this->User_Model->getUsuarios(),
		);
			$this->load->view("layouts/header");
			$this->load->view("layouts/aside", $aside);
			$this->load->view("admin/Menu/vPagos/add", $data);
			$this->load->view("layouts/footer");
	}

	
	public function edit()
	{
		$aside = array(
			'cGrupos' => $this->Grupo_Leyes_Model->getGrupo_Model()
		);
			$this->load->view("layouts/header");
			$this->load->view("layouts/aside", $aside);
			$this->load->view("admin/Menu/vPagos/edit", $data);
			$this->load->view("layouts/footer");
	}

	public function view()
	{
		$aside = array(
			'cGrupos' => $this->Grupo_Leyes_Model->getGrupo_Model()
		);
			$this->load->view("layouts/header");
			$this->load->view("layouts/aside", $aside);
			$this->load->view("admin/Menu/vPagos/view", $data);
			$this->load->view("layouts/footer");
	}


	// ----- Operaciones -----

		// ----- ALTAS -----
	public function store(){
		$Descripcion 		= $this->input->post("Descripcion");
		$Folio_Pago 		= $this->input->post("Folio_Pago");
		$Fecha_Pago 		= $this->input->post("Fecha_Pago");
		$Consepto_Pago 		= $this->input->post("Consepto_Pago");
		$Importe 			= $this->input->post("Importe");

			$data  		= array(
				'Descripcion' => $Descripcion, 
				'Folio_Pago' => $Folio_Pago,
				'Fecha_Pago' => $Fecha_Pago,
				'Consepto_Pago' => $Consepto_Pago,
				'Importe' 	=> $Importe
			);
			if ($this->Pagos_Model->save($data)) {
				redirect(base_url()."Menu/cPagos");
			}else{
				$this->session->set_flashdata("error","No se pudo guardar la informacion");
				redirect(base_url()."Menu/cPagos/add");
			}
	}

		// ----- CAMBIOS -----
	public function update($pk_Permiso){
		$pk_Permiso 	= $this->input->post("pk_Permiso");
		$menu 	= $this->input->post("menu");
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