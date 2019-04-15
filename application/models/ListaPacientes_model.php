<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ListaPacientes_model extends CI_Model {
 

 public function getListaPacientes(){
 
  // $this->db->where("estado","1");
  // $resultado = $this->db->get("paciente");
  // return $resultado->result();
 $this->db->select('*');
 $this->db->from('paciente');
 $this->db->where('estado', "1");
 $query= $this->db->get();
 return $query->result();

  }


 //  $this->db->select('apellido');
 // $this->db->from('paciente');
 // $this->db->where('estado', "1");
 // $query= $this->db->get();
 // return $query->result();
}
