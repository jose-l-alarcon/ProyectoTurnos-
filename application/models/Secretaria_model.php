<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Secretaria_model extends CI_Model {
 

		 public function guardarSecretaria($data){

		// devuelve un valor verdadero o falso que sera evaluado en el controlador
		    return $this->db->insert("secretaria",$data);
		   
		    }

			 public function editarSecretaria($idsecretaria){
			    $this->db->where("idsecretaria",$idsecretaria);
			    $resultado = $this->db->get("secretaria");
			    return $resultado->row();
			}
       

			 public function update($idsecretaria,$data){
			    $this->db->where("idsecretaria",$idsecretaria);
			    return $this->db->update("secretaria",$data);
			 
			}
 }


