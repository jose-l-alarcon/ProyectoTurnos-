<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Modificar_datosPacientes extends CI_Controller {

   public function __construct(){
       parent::__construct();

        if (!$this->session->userdata('login')) {
        // si los datos son falsos redireccionar 
        redirect(base_url()."invitado/loginUsuario");
        }

        $this->load->model("Turno_model");
  

  
        }

	 
          public function edit ($idpaciente) {

              $data = array (
                 'paciente' =>  $this->Turno_model->editarPaciente($idpaciente), 
              );

                  $this->load->view("layoutsPaciente/header");
                  $this->load->view("layoutsPaciente/aside");  
                  $this->load->view("paciente/editarPaciente",$data);
                  $this->load->view("layoutsPaciente/footer");  

               }


            public function edit1 ($idpaciente) {

              $data = array (
                 'paciente' =>  $this->Turno_model->editarPaciente($idpaciente), 
              );

                  $this->load->view("layoutsPaciente/header");
                  $this->load->view("layoutsPaciente/aside");  
                  $this->load->view("paciente/editarPass",$data);
                  $this->load->view("layoutsPaciente/footer");  

               }




             

            public function update() {

                 $idpaciente = $this->input->post("idpaciente");
                 $domicilio = $this->input->post("domicilio");
                 $edad = $this->input->post("edad");
                 $telefono = $this->input->post("telefono");
                 $obra_social = $this->input->post("obra_social");
                 $email = $this->input->post("email");

            $emailactual = $this->Turno_model->editarPaciente($idpaciente);

              if ($email == $emailactual->email) {
                $is_unique = "";
              }
              else{
                $is_unique = "|is_unique[paciente.email]";

               }
             
           
            $this->form_validation->set_rules('edad','Edad','required|integer');
            $this->form_validation->set_rules('telefono','Télefono', 'required|integer|min_length[10]');
            $this->form_validation->set_rules('domicilio','domicilio', 'required');

            $this->form_validation->set_rules('email','Correo electronico', 'required'.$is_unique.'|valid_email');

            $this->form_validation->set_message('required', 'El campo %s es obligatorio'); 
            $this->form_validation->set_message('integer', 'El campo %s debe disponer solo numeros'); 
             $this->form_validation->set_message('is_unique', 'El %s ya existe en la base de datos'); 
             $this->form_validation->set_message('valid_email', 'El campo %s no es valido');
              $this->form_validation->set_message('min_length', '%s: ajustese al formato (Cod. de área + Número sin el 15) ');   
        
             
              if ($this->form_validation->run() == TRUE ){

                        $data = array (
                        'domicilio' => $domicilio,
                        'edad' => $edad,
                        'telefono' => $telefono,
                        'obra_social' => $obra_social,
                        'email' => $email,
                       
                       ); 


                       if  ($this->Turno_model->update($idpaciente,$data)) {
                            // sleep(2);
                            redirect(base_url()."registrado/Turno/index");      
                            }

                       else {
                              // si los datos son falsos 
                          $this->session->set_flashdata("error", "No se puede actualizar la información
                            ");
                           redirect(base_url()."registrado/Modificar_datosPacientes/edit/". $idpaciente);
                           } 

                    }

                    else {

                      $this->edit($idpaciente);
                    }

               }


           public function update1() {

           $idpaciente = $this->input->post("idpaciente");
           $password = $this->input->post("password");
           $password2= $this->input->post("password2");
               
             
           
        $this->form_validation->set_rules('password','Contraseña', 'required|matches[password2]|min_length[4]');
         $this->form_validation->set_rules('password2','Contraseña', 'required|min_length[4]');

         $this->form_validation->set_message('required', 'El campo %s es obligatorio'); 

         $this->form_validation->set_message('matches', 'Los campos %s no coinciden');  
    
         $this->form_validation->set_message('min_length', '%s: requiere el minimo de dígitos');  
             
              if ($this->form_validation->run() == TRUE ){

                        $data = array (
                        'password' => $password,
                       
                       ); 


                       if  ($this->Turno_model->update($idpaciente,$data)) {
                            // sleep(2);
                            redirect(base_url()."registrado/Turno/index");      
                            }

                       else {
                              // si los datos son falsos 
                          $this->session->set_flashdata("error", "No se puede actualizar la información
                            ");
                           redirect(base_url()."registrado/Modificar_datosPacientes/edit/". $idpaciente);
                           } 

                    }

                    else {

                      $this->edit1($idpaciente);
                    }

               }






}