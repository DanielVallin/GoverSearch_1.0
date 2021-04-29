<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cBuscadorD extends CI_Controller {

	public function index()
	{
		$this->load->view("layouts/header");
		$this->load->view("layouts/asideuser");
		$this->load->view("admin/01_Menu/vBuscador/listD");
		$this->load->view("layouts/footer");
	}
}
