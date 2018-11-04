<?php

defined('BASEPATH') OR exit('No direct script access allowed'); 

class CodigoEjemplo extends CI_Controller {

public function index()
{

	$this->load->model('M_CodigoEjemplo');
	// cargar un modelo 

	$data ['listado'] = $this->M_CodigoEjemplo->get_all();
    // acceder a la funcion del modelo: metodos y funciones 

    
    $this->load->view('view_codigoejemplo',$data);
    // pasar a la vista la variable data en el cual contiene las funciones del modelo M_CodigoEjemplo
}

public function agregar ()
{

 $this->load->helper('form');
 // cargar el helper para utilizarlo en el formulario

 $this->load->view('view_formulario_contacto');
 // cargar la vista para mostrar formulario
}

}

/* Fin del archivo CodigoEjemplo */