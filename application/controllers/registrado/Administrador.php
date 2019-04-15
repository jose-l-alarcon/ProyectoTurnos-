<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {

	  public function __construct(){
       parent::__construct();

        if (!$this->session->userdata('login')) {
        // si los datos son falsos redireccionar 
        redirect(base_url()."invitado/loginUsuario");
        }
        $this->load->model("ListaPacientes_model"); 
        $this->load->model("ListaSecretaria_model"); 
  
      }

	     public function index()
     

        {

         

        $data = array (
        'listaPacientes' =>  $this->ListaPacientes_model->getListaPacientes(), 
        );

        $data1 = array (
        'listaSecretaria' =>  $this->ListaSecretaria_model->getListaSecretaria(), 
        );
    
        // return $diff;
          // print_r($diff
         // $array = json_decode( json_encode( $data ), true );
         // $array1=  json_decode( json_encode( $data1 ), true );
         //  print_r($array);
         //    echo "</br>"; 
         //  print_r($array1);
         //  echo "</br>";
        
        
         //  print_r($myJSON);

          // print_r($data1);
          // echo "</br>";
          // print_r($data);
          // echo "</br>";

          // print_r($result);

     
     if (($this->session->userdata('login')) and (($this->session->userdata('idrol')) == 1)) {

    $this->load->view("layoutsAdmin/header");
		$this->load->view("layoutsAdmin/aside");  
		$this->load->view("admin/listaPacientes",$data,$data1);
		$this->load->view("layoutsAdmin/footer");
      
        }
        elseif (($this->session->userdata('login')) and (($this->session->userdata('idrol')) == 2 )) 
         {
        $this->load->view("layoutsSecretaria/headerSE");
		$this->load->view("layoutsSecretaria/asideSE");  
		$this->load->view("admin/listaPacientes",$data);
		$this->load->view("layoutsSecretaria/footerSE");  
        }
     
        elseif (($this->session->userdata('login')) and (($this->session->userdata('idrol')) == 3)) 
        {
     $this->load->view("pacienteRegistrado/solicitarTurno");
	    }
        


	     else {
		$this->load->view("layoutsInvitado/header");
		$this->load->view("Frontend/login");
		$this->load->view("layoutsInvitado/footer");  
	    }
	}
 
}