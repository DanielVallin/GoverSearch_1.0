<?php
    class Backend_lib{
        private $CI;
        public function __CONSTRUCTOR(){
            //instanciar el super objeto de CI
            $this->CI = & get_instance();
        }

        public function control(){
            if(!$this->CI->seccion->userdata("login")){
                redirect(base_url());
            }
            $url = $this->CI->uri->segment(1);
            if($this->CI->uri->segment(2);){
                url = $this->CI->uri->segment(1)."/".$this->CI->uri->segment(2);
            }


            //llamar al modelo
            $infoMenu = $this->Backend_Model->getID($url);

            $permisos = $this->Backend_Model->getPermisos($infoMenu->pk_menu, $this->CI->session->userdata("rol"));
            if($permisos->read == 0){
                redirect(base_url()."dashboard");
            }else{
                return $permisos
            }
        }
    }

?>