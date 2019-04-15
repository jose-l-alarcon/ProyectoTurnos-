<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ListaSecretaria_model extends CI_Model {
 

 public function getListaSecretaria(){
 
$this->db->select('*');
 $this->db->from('secretaria');
 $this->db->where('estado', "1");
 $query= $this->db->get();
 return $query->result();
}

public function getListaSecretariaInactivos(){
 
$this->db->select('*');
 $this->db->from('secretaria');
 $this->db->where('estado', "0");
 $query= $this->db->get();
 return $query->result();
}

}
