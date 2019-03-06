<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Alta_paciente extends CI_Controller {

	   public function __construct(){
       parent::__construct();

        $this->load->model("ListaPacientes_model"); 
        $this->load->model("Paciente_model");
  
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
           
        $this->load->view("Frontend/alta_paciente"); 
     
        }
 
      }



                public function registrarUsuario()
                {
                 $apellido = $this->input->post("apellido");
                 $nombre = $this->input->post("nombre");
                 $edad = $this->input->post("edad");
                 $telefono = $this->input->post("telefono");
                 $domicilio = $this->input->post("domicilio");
                 $obra_social = $this->input->post("obra_social");
                 $email = $this->input->post("email");
                 $password = $this->input->post("password");

                    $data = array (
                         'apellido' => $apellido, 
                         'nombre' => $nombre,
                         'edad' => $edad,
                         'telefono' => $telefono,
                         'domicilio' => $domicilio,
                         'obra_social' => $obra_social,
                         'email' => $email,
                         'password' => $password,
                         'idrol' => "3",
                         'estado' => "1"
                    );

                    if  ($this->Paciente_model->guardarPaciente($data)) {

                        echo "registro exitoso";
                    }

                }


}
