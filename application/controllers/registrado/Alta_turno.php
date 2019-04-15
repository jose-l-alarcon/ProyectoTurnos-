<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Alta_turno extends CI_Controller {

	   public function __construct(){
       parent::__construct();

        $this->load->model("ListaPacientes_model"); 
        $this->load->model("Paciente_model");
        $this->load->model("Turno_model");

        $this ->load->helper('date');
  
      }


    public function index()

    {

         $data = array (
        'listaPacientes' =>  $this->ListaPacientes_model->getListaPacientes(), 
        );


           
        if (($this->session->userdata('login')) and (($this->session->userdata('idrol')) == 1)) {
        $this->load->view("layoutsAdmin/header");
                $this->load->view("layoutsAdmin/aside");  
                $this->load->view("admin/adminME",$data);
                $this->load->view("layoutsAdmin/footer");
      
        }
        elseif (($this->session->userdata('login')) and (($this->session->userdata('idrol')) == 2)) 
         {
        $this->load->view("layoutsSecretaria/headerSE");
                $this->load->view("layoutsSecretaria/asideSE");  
                $this->load->view("admin/adminSE",$data);
                $this->load->view("layoutsSecretaria/footerSE");  
        }
     
        elseif (($this->session->userdata('login')) and (($this->session->userdata('idrol')) == 3)) 
        {

          $this->load->view("layoutsPaciente/header");
          $this->load->view("layoutsPaciente/aside");  
          $this->load->view("paciente/alta_turno");
          $this->load->view("layoutsPaciente/footer");  
            }
        
        else 
        {
           
        $this->load->view("Frontend/alta_paciente"); 
     
        }
 
      }
          

           public function buscarHoras()
                {
                    
            $fecha= $this->input->post("fecha_turno");
      
             $this->form_validation->set_rules('fecha_turno','Fecha del turno', 'required');
           // $this->form_validation->set_message('required', 'El campo %s es obligatorio'); 
             $this->form_validation->set_message('required', '¡Selecione la %s es obligatorio!'); 
             
 
                 function normalize_date($fecha){

                 if(!empty($fecha)){
                  $var = explode('/',str_replace('-','/',$fecha));
                     return "$var[2]/$var[1]/$var[0]";
                   }

                 }

              if ($this->input->post("buscar")){

                $horasencontradas =  $this->Turno_model->getListaTurnoEncontradas(normalize_date($fecha));
                 $cantidadTurnos = $this->Turno_model->cantidadTurnos(normalize_date($fecha));
                 $horasencontradas1 =  $this->Turno_model->getListaTurnoEncontradas1();

               
                 }
                

               

                 if ($this->form_validation->run() == TRUE ){
           
                  $data = array (
                    'listaTurno' =>  $horasencontradas,
                    'listaTurno1' => $horasencontradas1,
                    'cantidadTurnos'    => $cantidadTurnos,
                    'fecha'     =>   $fecha
                     );

                  $this->load->view("layoutsPaciente/header");
                  $this->load->view("layoutsPaciente/aside");  
                  $this->load->view("paciente/alta_turno",$data);
                  $this->load->view("layoutsPaciente/footer");
                   }

                   else {

                    $this->index();
                   }



                      }


                
                
         


}
