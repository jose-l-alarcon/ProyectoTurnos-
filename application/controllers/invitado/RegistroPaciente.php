<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class RegistroPaciente extends CI_Controller {

	   public function __construct(){
       parent::__construct();

        $this->load->model("ListaPacientes_model"); 
  
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
         $this->load->view("pacienteRegistrado/paciente_index");
            }
        
        else 
        {
           $this->load->view("layoutsRegistrado/header");
      $this->load->view("Frontend/registro_paciente"); 
      $this->load->view("layoutsRegistrado/footer"); 
        }
 
      }



    public function registrarUsuario()
    {
     $apellido = $this->input->post("apellido");
     $nombre = $this->input->post("nombre");
     $domicilio = $this->input->post("domicilio");
     $ocupacion = $this->input->post("ocupacion");
     $telefono = $this->input->post("telefono");
     $obra_social = $this->input->post("obra_social");
     $edad = $this->input->post("edad");
     $fecha_nacimiento = $this->input->post("fecha_nacimiento");
     $email = $this->input->post("email");
     $password = $this->input->post("password");

        

    }


}
