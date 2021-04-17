<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cBus_Inteligente extends CI_Controller {

	public function index()
	{
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/01_menu/vBus_Inteligente/list");
		$this->load->view("layouts/footer");

	}
}
