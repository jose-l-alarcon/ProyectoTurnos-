<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class reporte_grafico extends CI_Controller {

	
    public function __construct(){
       parent::__construct();

        $this->load->model("Turno_model"); 
  
      }


	public function index()

	{
        $data = array (
        'cantidadPacientes' =>  $this->Turno_model->rowCount("paciente"), 
        'cantidadTurnos' =>  $this->Turno_model->rowCount("turno"), 
        );
     
        if (($this->session->userdata('login')) and (($this->session->userdata('idrol')) == 1)) {
        $this->load->view("layoutsAdmin/header");
        $this->load->view("layoutsAdmin/aside");  
        $this->load->view("reportes/graficos",$data);
        $this->load->view("layoutsAdmin/footer");
      
        }
        elseif (($this->session->userdata('login')) and (($this->session->userdata('idrol')) == 2)) 
         {
        
        }
     
       
}



   public function getData(){
    
    $resultados = $this->Turno_model->cantidad();
    echo json_encode($resultados);

   }
}