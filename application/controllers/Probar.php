<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Probar extends CI_Controller {

	public function index()
	{


	    $this->load->view("layoutsPrueba/header");
		$this->load->view("prueba"); 
		$this->load->view("layoutsPrueba/footer"); 

	}
}
