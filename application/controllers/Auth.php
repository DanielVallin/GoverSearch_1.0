<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model("Usuarios_model");
	}
	public function index()
	{
        if($this->session->userdata("login")) {
            redirect(base_url()."dashboard");
        }else{
            $this->load->view('admin/login');
        }
	}

    public function login(){
        $Usuario = $this->input->post("Usuario");
        $Contrasena = $this->input->post("Contrasena");
        $res = $this->Usuarios_model->login($Usuario, sha1($Contrasena));

        if(!$res) {
            $this->session->set_flashdata("error", "El usuario y/o contrasena son incorrectos.");
            redirect(base_url());
        }else{
            $data  = array(
                'id'        => $res->pk_Usuario, 
                'nombre'    => $res->Nombre,
                'rol'       => $res->User_Rol_pk,
                'login'     => TRUE
            );
                $this->session->set_userdata($data);
                redirect(base_url()."dashboard");
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
}


