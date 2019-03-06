<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {

	  public function __construct(){
       parent::__construct();

        if (!$this->session->userdata('login')) {
        // si los datos son falsos redireccionar 
        redirect(base_url()."invitado/IniciarSesion");
        }
  
      }

	public function index()
        {
     if (($this->session->userdata('login')) and (($this->session->userdata('nombre')) == "medico")) {
        $this->load->view("layoutsAdmin/header");
		$this->load->view("layoutsAdmin/aside");  
		$this->load->view("admin/adminME");
		$this->load->view("layoutsAdmin/footer");
      
        }
        elseif (($this->session->userdata('login')) and (($this->session->userdata('nombre')) == "secretaria")) 
         {
        $this->load->view("layoutsSecretaria/headerSE");
		$this->load->view("layoutsSecretaria/asideSE");  
		$this->load->view("admin/adminSE");
		$this->load->view("layoutsSecretaria/footerSE");  
        }
     
        elseif (($this->session->userdata('login')) and (($this->session->userdata('nombre')) == "paciente")) 
        {
        $this->load->view("pacienteRegistrado/paciente_index");
	    }
        
	     else {
		$this->load->view("layoutsAdmin/header");
		$this->load->view("layoutsAdmin/aside");  
		$this->load->view("admin/adminME");
		$this->load->view("layoutsAdmin/footer");  
	    }
	}
} 
