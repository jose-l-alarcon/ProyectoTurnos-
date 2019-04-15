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


             

            public function update() {

                 $idpaciente = $this->input->post("idpaciente");
                 $domicilio = $this->input->post("domicilio");
                 $edad = $this->input->post("edad");
                 $telefono = $this->input->post("telefono");
                 $obra_social = $this->input->post("obra_social");
                 $email = $this->input->post("email");
             
                  
              // $this->form_validation->set_rules('domicilio','Domicilio', 'required');
              // $this->form_validation->set_rules('edad', 'Edad', 'required');
              // $this->form_validation->set_rules('telefono', 'Telefono', 'required');
              // $this->form_validation->set_rules('obra_social', 'Obra Social', 'required');
              // $this->form_validation->set_rules('email', 'Email', 'required');

              //  $this->form_validation->set_message('required', 'El campo %s es obligatorio'); 

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
}