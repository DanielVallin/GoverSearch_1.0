<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permisos extends CI_Controller {
	
	public function __construct(){
		parent::__construct();
        //Aside Barra lateral.
        $this->load->model("Grupo_Leyes_Model");
		
		$this->load->model("Permisos_Model");
        $this->load->model("User_Model");
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
			'permisos' =>$this->Permisos_Model->getPermisos(),
        );
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside", $aside);
		$this->load->view("admin/Menu/permisos/add", $data);
		$this->load->view("layouts/footer");

	}

}