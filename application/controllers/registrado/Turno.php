<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Turno extends CI_Controller {

	
   public function __construct(){
       parent::__construct();

        if (!$this->session->userdata('login')) {
        // si los datos son falsos redireccionar 
        redirect(base_url()."invitado/loginUsuario");
        }

        $this->load->model("ListaPacientes_model"); 
        $this->load->model("Turno_model"); 

  
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
          $this->load->view("paciente/mis_datos");
          $this->load->view("layoutsPaciente/footer");  
         }
        
        else 
            
        {
        $this->load->view("layoutsInvitado/header");
		    $this->load->view("Frontend/index_invitado"); 
		    $this->load->view("layoutsInvitado/footer"); 


        }



      }


  public function perfilPaciente($idpaciente)

     {
    
      $data = array (
        'listaturno' => $this->Turno_model->getListaTurno($idpaciente), 
                    );

           $this->load->view("pacienteRegistrado/perfil_paciente", $data);

        }


    public function fechasDisponibles ()

    {

      $fecha_turno = $this->input->post("fecha_turno");


        $res = $this->Turno_model->login($fecha_turno);

       if (!$res) {

        echo ("no existen horarios disponibles");
         }

       else 
           {
       // en el caso que encuentre algun usuario +

         $data = array (
         'fecha_turno' => $res->fecha_turno,
          'hora_turno'=>  $res->hora_turno,
          );

          $this->load->view("pacienteRegistrado/solicitarTurno",$data);


    }
}

}