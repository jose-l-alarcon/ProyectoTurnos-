<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Modificar_turno extends CI_Controller {

  
   public function __construct(){
       parent::__construct();

        if (!$this->session->userdata('login')) {
        // si los datos son falsos redireccionar 
        redirect(base_url()."invitado/loginUsuario");
        }

        $this->load->model("ListaPacientes_model"); 
        $this->load->model("Turno_model"); 

  
      }


      public function modificarTurno ($idturno)

         {
         
         $idturno= $idturno;
         $data = array (
             'turno' =>  $this->Turno_model->turnoAcancelar($idturno),
             'idturno' =>  $idturno,

          );
   
              $this->load->view("layoutsPaciente/header");
              $this->load->view("layoutsPaciente/aside");  
              $this->load->view("paciente/modificarTurno_cambiar",$data);
              $this->load->view("layoutsPaciente/footer");  
            }

        

       public function buscarHoras()
                {
                    
                 $fecha= $this->input->post("fecha_turno");
                 $idturno = $this->input->post("idturno");


             $this->form_validation->set_rules('fecha_turno','Fecha del turno', 'required');
             $this->form_validation->set_message('required', '¡Selecione la %s es obligatorio!'); 


                 function normalize_date($fecha){

                 if(!empty($fecha)){
                  $var = explode('/',str_replace('-','/',$fecha));
                     return "$var[2]/$var[1]/$var[0]";
                   }

                 }

                 if ($this->input->post("buscar")){

                $horasencontradas =  $this->Turno_model->getListaTurnoEncontradas(normalize_date($fecha));
                 }
                 

                $horasencontradas1 =  $this->Turno_model->getListaTurnoEncontradas1();

            if ($this->form_validation->run() == TRUE ){

                  $data = array (
                    'listaTurno' =>  $horasencontradas,
                    'listaTurno1' => $horasencontradas1,
                    'fecha'     =>   $fecha,
                    'idturno'    =>  $idturno
                     );

                  $this->load->view("layoutsPaciente/header");
                  $this->load->view("layoutsPaciente/aside");  
                  $this->load->view("paciente/modificarTurno_cambiar1",$data);
                  $this->load->view("layoutsPaciente/footer");

                }

                else {

                    $this->modificarTurno($idturno);
                   }



                      
                }
         

         



}