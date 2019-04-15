<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Probar extends CI_Controller {

	  public function __construct(){
       parent::__construct();

        $this->load->model("Turno_model"); 
        
  
      }

	public function index()
	{

	$fecha= $this->input->post("fecha");


     function normalize_date($fecha){

     if(!empty($fecha)){
      $var = explode('/',str_replace('-','/',$fecha));
         return "$var[2]/$var[1]/$var[0]";
       }

     }

     echo "normalize_date($fecha)";

     if ($this->input->post("buscar")){
     $horasencontradas =  $this->Turno_model->getListaTurnoEncontradas(normalize_date($fecha));
     }

      $data = array (
        'listaTurno' =>  $horasencontradas,
        'fecha'     =>   $fecha
         );


		$this->load->view("prueba",$data); 
	
	}
}
