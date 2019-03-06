<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Paciente_model extends CI_Model {
 

 public function guardarPaciente($data){

// devuelve un valor verdadero o falso que sera evaluado en el controlador
    return $this->db->insert("paciente",$data);
   
    }

}
