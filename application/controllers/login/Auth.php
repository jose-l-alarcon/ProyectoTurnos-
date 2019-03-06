<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	// Constructor crear los objetos, es el primer metodo que se ejecuta 
    public function __construct(){
       parent::__construct();
   
      // llamar al modelo Login_model
      $this->load->model("Login_model"); 

      $this->load->model("ListaPacientes_model"); 
  
      // ahora se puede llamar al modelo que trae los resultados obtenidos en la consulta a la base de datos
    } 

   
	public function index()	{

     $data = array (
        'listaPacientes' =>  $this->ListaPacientes_model->getListaPacientes(), 
        );

    if (($this->session->userdata('login')) and (($this->session->userdata('idrol')) == 1)) {
        $this->load->view("layoutsAdmin/header");
                $this->load->view("layoutsAdmin/aside");  
                $this->load->view("admin/listaPacientes",$data);
                $this->load->view("layoutsAdmin/footer");
      
        }
        elseif (($this->session->userdata('login')) and (($this->session->userdata('idrol')) == 2 )) 
         {
        $this->load->view("layoutsSecretaria/headerSE");
                $this->load->view("layoutsSecretaria/asideSE");  
                $this->load->view("admin/listaPacientes",$data);
                $this->load->view("layoutsSecretaria/footerSE");  
        }
     
        elseif (($this->session->userdata('login')) and (($this->session->userdata('idrol')) == 3 )) 
        {
         echo "hola paciente";
            }
        else 
        {
              $this->load->view("login/Inicio"); 
        }
	   } 



// metodo login recibe los datos que se envian por el formulario de la vista por el input 
	public function login () {

     $email = $this->input->post("email");
     $password = $this->input->post("password");
   
   // luego de recibir los datos hay que hacer una consulta al modelo

     // llamar al metodo login que se creo en el modelo
       $res = $this->Login_model->login($email , $password);

       if (!$res) {
       	// si los datos son falsos 
        $this->session->set_flashdata("error", "El usuario y/o contraseñas son incorrectos");
         redirect(base_url()."invitado/loginUsuario");
         }

       else 
           {
       // en el caso que encuentre algun usuario +

       	  $data = array (
           'nombre' => $res->nombre,
           'apellido'=>  $res->apellido,
           'idrol' => $res->idrol,
           'login'=> true 
         );
          
     
         $this->session->set_userdata($data);

          if ($data['idrol'] == 1) {
           
           redirect(base_url()."registrado/Administrador");

          }
          else if ($data['idrol'] == 2){
           
        redirect(base_url()."registrado/AdministradorSEC");

          }
          else if ($data['idrol'] == 3)
          
            echo "hola paciente";
          }
        }


         public function cerrar() {

          $this->session->sess_destroy();
         redirect(base_url()."invitado/Welcome");
        }

     
}