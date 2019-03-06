<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {
 

 // funcion que recibe los datos email y password enviados por el controlador Auth
	public function login($email, $password){


$medico = $this->db->query("SELECT * FROM medico WHERE email = '$email' AND password = '$password'");
$secretaria = $this->db->query("SELECT * FROM secretaria WHERE email = '$email' AND password = '$password'");
$paciente = $this->db->query("SELECT * FROM paciente WHERE email = '$email' AND password = '$password'");

if ($medico->num_rows() > 0) 
{
   return $medico->row();

    exit(); 
}
 

else if($secretaria->num_rows() > 0) 
{
     return $secretaria->row();
     exit(); 
}
 

else if($paciente->num_rows() > 0) 
{
    return $paciente->row();
    exit(); 
}

else 
{
   
   return False; 
}



	}
}
