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



       public function view($idsecretaria) {

           $data = array (
            'secretaria' =>  $this->Secretaria_model->editarSecretaria($idsecretaria), 
              );
 
              

              $this->load->view("admin/modal_Secretaria",$data);
            
              }

               




} 
