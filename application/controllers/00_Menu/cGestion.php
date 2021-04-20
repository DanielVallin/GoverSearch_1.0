<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cGestion extends CI_Controller {

	public function index()
	{
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/01_Menu/vGestion/list");
		$this->load->view("layouts/footer");
	}
    public function add()
	{
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("admin/01_Menu/vGestion/add");
		$this->load->view("layouts/footer");

	}
}