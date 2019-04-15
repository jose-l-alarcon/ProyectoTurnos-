<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class CI_confirmarturno extends CI_Controller {

	   public function __construct(){
       parent::__construct();

        $this->load->model("ListaPacientes_model"); 
        $this->load->model("Paciente_model");
        $this->load->model("Turno_model");

        $this ->load->helper('date');
  
      }

      public function confirmarTurno ($id_hora, $fecha ,$fecha1,$fecha2)

       {


             $horas =  $this->Turno_model->confirmarTurno($id_hora);
             $fechaelegida = $fecha."/".$fecha1."/".$fecha2;

          



              $data = array (
                 'listaTurno' => $horas,
                 'fecha'      => $fechaelegida
              );

                  $this->load->view("layoutsPaciente/header");
                  $this->load->view("layoutsPaciente/aside");  
                  $this->load->view("paciente/view_confirmar_turno",$data);
                  $this->load->view("layoutsPaciente/footer");

               }


         public function registrarTurno()
                {
                 $idpaciente = $this->input->post("idpaciente");
                 $fecha_turno = $this->input->post("fecha_turno");
                 $id_hora = $this->input->post("id_hora");
                 $motivo = $this->input->post("motivo");
                   

                 function normalize_date($fecha_turno){
    
                 if(!empty($fecha_turno)){
                  $var = explode('/',str_replace('-','/',$fecha_turno));
                     return "$var[2]/$var[1]/$var[0]";
                   }
        
                 }

                    $data = array (
                         
                         'idpaciente' => $idpaciente,
                         'fecha_turno' =>normalize_date($fecha_turno),
                         'id_hora' => $id_hora,
                         'motivo' => $motivo,
                         'estado' => "1"

                    
                    );

                    if  ($this->Turno_model->guardarTurno($data)) {

                      redirect(base_url()."registrado/Alta_turno/index");
                    }

                // if ($this->input->post())
                // {

                //   print_r($data); 
                // }

                }

        
          public function confirmarTurno_modificado ($id_hora, $fecha ,$fecha1,$fecha2,$idturno)

             {

             $horas =  $this->Turno_model->confirmarTurno($id_hora);
             $fechaelegida = $fecha."/".$fecha1."/".$fecha2;

             $turno =  $this->Turno_model->datosTurno($idturno);

             $idturno = $idturno;

          
              $data = array (
                 'listaTurno' => $horas,
                 'fecha'      => $fechaelegida,
                 'datosturno' =>  $turno,
                 'idturno'    => $idturno
              );

              $this->load->view("layoutsPaciente/header");
              $this->load->view("layoutsPaciente/aside");  
              $this->load->view("paciente/view_confirmar_turno_modificado",$data);
              $this->load->view("layoutsPaciente/footer");

               }




            public function registrarTurno_modificado()

                {

                 $idturno = $this->input->post("idturno");
                 $fecha_turno = $this->input->post("fecha_turno");
                 $id_hora = $this->input->post("id_hora");
                 $motivo = $this->input->post("motivo");
                   

                function normalize_date($fecha_turno){
    
                 if(!empty($fecha_turno)){
                  $var = explode('/',str_replace('-','/',$fecha_turno));
                     return "$var[2]/$var[1]/$var[0]";
                   }
        
                 }

                    $data = array (
                  
                         'fecha_turno' =>normalize_date($fecha_turno),
                         'id_hora' => $id_hora,
                         'motivo' => $motivo,
                    
                    );

               if  ($this->Turno_model->actualizarTurno($idturno,$data)) {
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
