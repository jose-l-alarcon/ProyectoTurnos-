<?php

defined('BASEPATH') OR exit('No direct script access allowed'); 

class M_CodigoEjemplo extends CI_Model {

public function get_all()
{

	
	$this->load->database(''); 
	// cargar base de datos
	$query = $this->db->get('secretaria');
	// en la variable query aobtener los satos de la tabla secretaria
	return $query->result();
	// retornar los resultados de la variable query 

}

} 

/* Fin del archivo CodigoEjemplo */