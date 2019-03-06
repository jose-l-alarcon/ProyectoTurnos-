<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ListaSecretaria_model extends CI_Model {
 

 public function getListaSecretaria(){
 
 $this->db->where("estado","1");
 $resultado = $this->db->get("secretaria");
 return $resultado->result();
}

}
