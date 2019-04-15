<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class reporte_turno extends CI_Controller {

	
    public function __construct(){
       parent::__construct();

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
           
        if (($this->session->userdata('login')) and (($this->session->userdata('idrol')) == 1)) {
        $this->load->view("layoutsAdmin/header");
        $this->load->view("layoutsAdmin/aside");  
        $this->load->view("reportes/turnos",$data);
        $this->load->view("layoutsAdmin/footer");
      
        }
        elseif (($this->session->userdata('login')) and (($this->session->userdata('idrol')) == 2)) 
         {
        
        }
     
       
}
}