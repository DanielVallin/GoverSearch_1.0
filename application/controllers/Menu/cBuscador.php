<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cBuscador extends CI_Controller {

	public function __construct(){
		parent::__construct();
		//Aside Barra lateral.
		$this->load->model("Grupo_Leyes_Model");

		$this->load->model("Claves_Model");
		$this->load->model("Reg_Leyes_Model");
		$this->load->model("Ter_Clave_Model");
		
	}

	public function index()
	{
		//Llamar boton
		$clave = $this->input->post("clave");
		//Llamar boton para busqueda.
		if($this->input->post("buscar")){
				$clavename = $this->Ter_Clave_Model->getTerminobyClave($clave);
			}else{
				$clavename = $this->Ter_Clave_Model->getTermino();
			}
		//Llamar variables de otras tablas
		$aside = array(
			'cGrupos' => $this->Grupo_Leyes_Model->getGrupo_Model()
		);
		$data = array(
			'terminos' => $clavename,
			'clave'		=> $clave
	   );	
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside", $aside);
		$this->load->view("admin/Menu/vBuscador/list", $data);
		$this->load->view("layouts/footer");
	}

	public function view($pk_Datos_ley){
		$data = array(
			'termino' => $this->Ter_Clave_Model->getTerminoid($pk_Datos_ley)
		);
		$this->load->view("admin/Menu/vBuscador/view",$data); 
	}
	
	public function deleteall()
	{
		if(isset($_POST['delete_all']))
		{
			if(!empty($this->input->post('checkbox_value')))
			{
				$checkedEmp = $this->input->post('checkbox_value');
				
				
				$checked_id = [];
				
				foreach($checkedEmp as $row){
					array_push($checked_id, $row);
					echo $row;
				}
				

				$data = array(
					'terminos' => $this->Ter_Clave_Model->pdfSelectEmp($checked_id)
				);
				$this->load->view("admin/Menu/vBuscador/view",$row); 
				
				//redirect(base_url()."Menu/cBuscador");			
			}
			else
			{
				$this->session->set_flashdata("error","No se ha seleccionado ninguna casilla");
				redirect(base_url()."Menu/cBuscador");
			}
		}
	}

	



	
}
