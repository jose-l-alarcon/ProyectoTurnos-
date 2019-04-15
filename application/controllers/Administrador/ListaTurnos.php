<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ListaTurnos extends CI_Controller {

	  public function __construct(){
       parent::__construct();

        if (!$this->session->userdata('login')) {
        // si los datos son falsos redireccionar 
        redirect(base_url()."invitado/loginUsuario");
        }

        $this->load->model("Turno_model"); 
        
  
      }

	public function index()
        {

       $fecha_turno =  $this->input->post("fecha_turno"); 

      if ($this->input->post("buscar")){
       $fechas = $this->Turno_model->getListaTurnoReportes($fecha_turno); 

      }
      else {

        $fechas =  $this->Turno_model->getListaTurno();
      }

       $data = array (
        'listaturnos' =>  $fechas,
        'fecha_turno' =>  $fecha_turno
        );


     if (($this->session->userdata('login')) and (($this->session->userdata('idrol')) == 1 )) {
        $this->load->view("layoutsAdmin/header");
		$this->load->view("layoutsAdmin/aside");  
		$this->load->view("admin/listaTurnos",$data);
		$this->load->view("layoutsAdmin/footer");
      
        }
        elseif (($this->session->userdata('login')) and (($this->session->userdata('idrol')) == 2)) 
         {
   $this->load->view("layoutsSecretaria/headerSE");
		$this->load->view("layoutsSecretaria/asideSE");  
		$this->load->view("admin/listaTurnosSecretaria",$data);
		$this->load->view("layoutsSecretaria/footerSE");  
        }
     
        elseif (($this->session->userdata('login')) and (($this->session->userdata('idrol')) == 3)) 
        {
        $this->load->view("pacienteRegistrado/solicitarTurno");
	    }
        


	     else {
		$this->load->view("layoutsAdmin/header");
		$this->load->view("layoutsAdmin/aside");  
		$this->load->view("admin/adminME");
		$this->load->view("layoutsAdmin/footer");  
	    }
	}
} 
