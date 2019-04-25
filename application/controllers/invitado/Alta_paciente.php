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
         $this->load->view("pacienteRegistrado/solicitarTurno");
            }
        
          else 
         {
        
         $this->load->view("layoutsInvitado/header"); 
         $this->load->view("Frontend/formulario_registro"); 
         $this->load->view("layoutsInvitado/footer"); 
     
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
                 $password2= $this->input->post("password2");


            $this->form_validation->set_rules('apellido','Apellido', 'required');
            $this->form_validation->set_rules('nombre','Nombre', 'required');
            $this->form_validation->set_rules('edad','Edad','required|integer');
            $this->form_validation->set_rules('telefono','Télefono', 'required|integer|min_length[10]');
            $this->form_validation->set_rules('domicilio','domicilio', 'required');
            $this->form_validation->set_rules('obra_social','Obra Social', 'required');

            $this->form_validation->set_rules('email','Correo electronico', 'required|is_unique[paciente.email]|valid_email');
            $this->form_validation->set_rules('password','Contraseña', 'required|matches[password2]|min_length[4]');
            $this->form_validation->set_rules('password2','Contraseña', 'required|min_length[4]');


          
            $this->form_validation->set_message('required', 'El campo %s es obligatorio'); 
            $this->form_validation->set_message('integer', 'El campo %s debe disponer solo numeros'); 
             $this->form_validation->set_message('is_unique', 'El %s ya existe en la base de datos');
              $this->form_validation->set_message('matches', 'Los campos %s no coinciden');  
             $this->form_validation->set_message('valid_email', 'El campo %s no es valido');
              $this->form_validation->set_message('min_length', '%s: requiere el minimo de dígitos');   


             if ($this->form_validation->run() == TRUE ){

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

                    redirect(base_url()."invitado/mensajePaciente/index");

                    }
                }
                else {

                     $this->index();
                }
               

                }


}
