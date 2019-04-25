<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Secretaria extends CI_Controller {

   public function __construct(){
       parent::__construct();

        if (!$this->session->userdata('login')) {
        // si los datos son falsos redireccionar 
        redirect(base_url()."invitado/loginUsuario");
        }

        $this->load->model("ListaSecretaria_model");
        $this->load->model("Secretaria_model");

  
        }

	 
         public function agregarSecretaria() {

                 $this->load->view("layoutsAdmin/header");
                  $this->load->view("layoutsAdmin/aside");  
                  $this->load->view("admin/agregarSecretaria");
                  $this->load->view("layoutsAdmin/footer");  

            }


            public function guardar()
                {
                 $apellido = $this->input->post("apellido");
                 $nombre = $this->input->post("nombre");
                 $direccion = $this->input->post("direccion");
                 $telefono = $this->input->post("telefono");
                 $email = $this->input->post("email");
                 $password = $this->input->post("password");
                 $password2= $this->input->post("password2");

            $this->form_validation->set_rules('apellido','Apellido', 'required');
            $this->form_validation->set_rules('nombre','Nombre', 'required');
            $this->form_validation->set_rules('direccion','Dirección', 'required');
           $this->form_validation->set_rules('telefono','Télefono', 'required|integer|min_length[10]');

           $this->form_validation->set_rules('email','Correo electronico', 'required|is_unique[secretaria.email]|valid_email');
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
                         'direccion' => $direccion,
                         'telefono' => $telefono,
                         'email' => $email,
                         'password' => $password,
                         'idrol' => "2",
                         'estado' => "1"
                    );

                    if  ($this->Secretaria_model->guardarSecretaria($data)) {
                      redirect(base_url()."Administrador/ListaSecretaria/index");
                        
                      }

                    else {
                        // si los datos son falsos 
                    $this->session->set_flashdata("error", "No se puede guardar la información
                      ");
                     redirect(base_url()."Administrador/Secretaria/agregarSecretaria");
                     }

                   }
                   else {

                       $this->agregarSecretaria();

                   }

                 }
  

             public function edit($idsecretaria) {

              $data = array (
                 'secretaria' =>  $this->Secretaria_model->editarSecretaria($idsecretaria), 
              );

                 $this->load->view("layoutsAdmin/header");
                  $this->load->view("layoutsAdmin/aside");  
                  $this->load->view("admin/editarSecretaria",$data);
                  $this->load->view("layoutsAdmin/footer");  

               }


            public function update() {

                 $idsecretaria = $this->input->post("idsecretaria");
                 $apellido = $this->input->post("apellido");
                 $nombre = $this->input->post("nombre");
                 $direccion = $this->input->post("direccion");
                 $telefono = $this->input->post("telefono");
                 $email = $this->input->post("email");
                 $password = $this->input->post("password");

              $emailactual = $this->Secretaria_model->editarSecretaria($idsecretaria);

              if ($email == $emailactual->email) {
                $is_unique = "";
              }
              else{
                $is_unique = "|is_unique[secretaria.email]";

               }

            $this->form_validation->set_rules('telefono','Télefono', 'required|integer|min_length[10]');
            $this->form_validation->set_rules('direccion','Domicilio', 'required');

            $this->form_validation->set_rules('email','Correo electronico', 'required'.$is_unique.'|valid_email');
            $this->form_validation->set_rules('password','Contraseña', 'required|matches[password2]|min_length[4]');
            $this->form_validation->set_rules('password2','Contraseña', 'required|min_length[4]');

            $this->form_validation->set_message('required', 'El campo %s es obligatorio'); 
            $this->form_validation->set_message('integer', 'El campo %s debe disponer solo numeros'); 
             $this->form_validation->set_message('is_unique', 'El %s ya existe en la base de datos'); 
             $this->form_validation->set_message('valid_email', 'El campo %s no es valido');
              $this->form_validation->set_message('matches', 'Los campos %s no coinciden');  
              $this->form_validation->set_message('min_length', '%s: requiere el minimo de dígitos');   

            if ($this->form_validation->run() == TRUE ){
            
                  $data = array (
                  'apellido' => $apellido,
                  'nombre' => $nombre,
                  'direccion' => $direccion,
                  'telefono' => $telefono,
                  'email' => $email,
                  'password' => $password,

                 ); 


                 if  ($this->Secretaria_model->update($idsecretaria,$data)) {
                      redirect(base_url()."Administrador/ListaSecretaria/index");
                        
                      }

                 else {
                        // si los datos son falsos 
                    $this->session->set_flashdata("error", "No se puede actualizar la información
                      ");
                     redirect(base_url()."Administrador/Secretaria/editarSecretaria/". $idsecretaria);
                     } 

                  }

                  else {

                     $this->edit($idsecretaria);
                  }

               }



    
        
             public function delete ($idsecretaria) {

              $data = array (
                 'secretaria' =>  $this->Secretaria_model->editarSecretaria($idsecretaria), 
              );

                 $this->load->view("layoutsAdmin/header");
                  $this->load->view("layoutsAdmin/aside");  
                  $this->load->view("admin/eliminarSecretaria",$data);
                  $this->load->view("layoutsAdmin/footer");  

               }

                public function eliminar ($idsecretaria) {

                 $idsecretaria = $this->input->post("idsecretaria");
    
                  $data = array (
                  'estado' => 0,
                 );

                 if  ($this->Secretaria_model->eliminarSecretaria($idsecretaria,$data)) {
                      redirect(base_url()."Administrador/ListaSecretaria/index");
                        
                      }

                 else {
                        // si los datos son falsos 
                    $this->session->set_flashdata("error", "No se puede actualizar la información
                      ");
                     redirect(base_url()."Administrador/Secretaria/editarSecretaria/". $idsecretaria);
                     } 

               }



             public function altaSecretaria ($idsecretaria) {

              $data = array (
                 'secretaria' =>  $this->Secretaria_model->editarSecretaria($idsecretaria), 
              );

                 $this->load->view("layoutsAdmin/header");
                  $this->load->view("layoutsAdmin/aside");  
                  $this->load->view("admin/altaSecretaria",$data);
                  $this->load->view("layoutsAdmin/footer");  

               }

               public function altaSistema ($idsecretaria) {

                 $idsecretaria = $this->input->post("idsecretaria");
    
                  $data = array (
                  'estado' => 1,
                 );

                 if  ($this->Secretaria_model->eliminarSecretaria($idsecretaria,$data)) {
                      redirect(base_url()."Administrador/ListaSecretaria/index");
                        
                      }

                 else {
                        // si los datos son falsos 
                    $this->session->set_flashdata("error", "No se puede actualizar la información
                      ");
                     redirect(base_url()."Administrador/Secretaria/editarSecretaria/". $idsecretaria);
                     } 

               }
               




} 
