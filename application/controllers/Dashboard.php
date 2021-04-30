<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
		public function __construct(){
			parent::__construct();
			//Aside Barra lateral.
			$this->load->model("Grupo_Leyes_Model");
			if (!$this->session->userdata("login")) {
				redirect(base_url());
			}
		}
		public function index()
		{
			$aside = array(
				'cGrupos' => $this->Grupo_Leyes_Model->getGrupo_Model()
			);
			$this->load->view("layouts/header");
			$this->load->view("layouts/aside", $aside);
			$this->load->view("admin/dashboard");
			$this->load->view("layouts/footer");
	
		}
	}
	
