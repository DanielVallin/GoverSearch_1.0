<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cBlogD extends CI_Controller {

	public function index()
	{
		$this->load->view("layouts/header");
		$this->load->view("layouts/asideuser");
		$this->load->view("admin/01_Menu/vBlog/listD");
		$this->load->view("layouts/footer");

	}
}