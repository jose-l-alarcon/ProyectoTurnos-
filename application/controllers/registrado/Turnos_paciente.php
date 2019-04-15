<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Turnos_paciente extends CI_Controller {

  
   public function __construct(){
       parent::__construct();

        if (!$this->session->userdata('login')) {
        // si los datos son falsos redireccionar 
        redirect(base_url()."invitado/loginUsuario");
        }

        $this->load->model("ListaPacientes_model"); 
        $this->load->model("Turno_model"); 

  
      }

 public function index($idpaciente)
  
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
        
        $fechaactual= date('Y-m-d');

        $fecha1 = strtotime ( '-1 day' , strtotime ( $fechaactual ) ) ;
        $nuevafecha = date ( 'Y-m-d' , $fecha1 );

        $data = array (
        'misturnos' =>  $this->Turno_model->getMisTurnos($idpaciente,$nuevafecha), 
        ); 


          $this->load->view("layoutsPaciente/header");
          $this->load->view("layoutsPaciente/aside");  
          $this->load->view("paciente/mis_turnos",$data);
          $this->load->view("layoutsPaciente/footer");  
         }
        
        else 
            
        {
        $this->load->view("layoutsInvitado/header");
        $this->load->view("Frontend/index_invitado"); 
        $this->load->view("layoutsInvitado/footer"); 


        }



      }


         public function cancelarTurno($idpaciente)

         {
        
        $fechaactual= date('Y-m-d');

        $fecha1 = strtotime ( '-1 day' , strtotime ( $fechaactual ) ) ;
        $nuevafecha = date ( 'Y-m-d' , $fecha1 );


        // $fechaactual= date('Y-m-d');
        $data = array (
        'turnosCancelados' =>  $this->Turno_model->getMisTurnos($idpaciente,$nuevafecha), 
           ); 


          $this->load->view("layoutsPaciente/header");
          $this->load->view("layoutsPaciente/aside");  
          $this->load->view("paciente/turnosCancelados",$data);
          $this->load->view("layoutsPaciente/footer");  
            }


          public function delete($idturno) {

          $data = array (
             'turno' =>  $this->Turno_model->turnoAcancelar($idturno), 
          );
   
              $this->load->view("layoutsPaciente/header");
              $this->load->view("layoutsPaciente/aside");  
              $this->load->view("paciente/cancelarTurno_confirmar",$data);
              $this->load->view("layoutsPaciente/footer");  

           }

            public function eliminarTurno ($idturno) {

                 $idturno = $this->input->post("idturno");
    
                  $data = array (
                  'estado' => 0,
                 );

                 if  ($this->Turno_model->eliminarTurno($idturno,$data)) {
                      redirect(base_url()."registrado/Turno/index");
                        
                      }

                 else {
                        // si los datos son falsos 
                    $this->session->set_flashdata("error", "No se puede actualizar la información
                      ");
                     redirect(base_url()."Administrador/Secretaria/editarSecretaria/". $idsecretaria);
                     } 

               }

}