<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ListaPacientes_model extends CI_Model {
 

 public function getListaPacientes(){
 
 $this->db->where("estado","1");
 $resultado = $this->db->get("paciente");
 return $resultado->result();
}

}
