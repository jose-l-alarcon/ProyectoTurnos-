<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Paciente_model extends CI_Model {
 

		 public function guardarPaciente($data){
         // devuelve un valor verdadero o falso que sera evaluado en el controlador
		 return $this->db->insert("paciente",$data);
		 }
   //       public function datosPaciente(){
	  //    $this->db->where("idpaciente",$this->session->userdata("idpaciente"));
		 // $resultado = $this->db->get("paciente");
	  //    return $resultado->row();
			// }


} 