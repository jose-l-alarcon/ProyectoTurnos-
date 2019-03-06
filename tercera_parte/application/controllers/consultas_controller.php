<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class consultas_controller extends CI_Controller {
		function __construct() {
			parent::__construct();
         $this->load->library('pagination');
            $this->load->model('consultas_model');
		}

	public function informacionCont(){  
	    $this->form_validation->set_rules('nombre', 'nombre', 'required');      
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('telefono', 'telefono', 'required');      
        $this->form_validation->set_rules('mensaje', 'mensaje', 'required');
		$this->form_validation->set_message('valid_email', 'El campo %s debe ser un mail válido');
		$this->form_validation->set_message('required', 'El campo %s es obligatorio'); 
        if ($this->form_validation->run() == FALSE) {     
		    $this->load->view('/partes/header');
            $this->load->view('/partes/navbar_cli');
            $this->load->view('/front/informacionCont');
            $this->load->view('/partes/footer');   
   	    } else {
           $nombre = $this->input->post('nombre');     
            $email = $this->input->post('email');
            $telefono = $this->input->post('telefono');
            $mensaje = $this->input->post('mensaje');
        
           $f=$this->consultas_model->guardar_mensaje($nombre,$email,$telefono,$mensaje);
           $this->session->set_flashdata('correcto', 'Consulta enviada!');
            redirect(base_url()); 
        }
 	}
 
    

    public function listar_mensajes(){
        if ($this->session->userdata('perfil_id') > 1){
                redirect(base_url('')); 
            }
        if ($this->session->userdata('login')) {
        $params = array();
            $limit_per_page = 7;
            $start_index = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
            $total_records = $this->consultas_model->get_total();
     
            if ($total_records > 0) 
            {
                // get current page records
                $params["consultas"] = $this->consultas_model->get_current_page_records($limit_per_page, $start_index);
                 
                $config['base_url'] = base_url('mensajes');
                $config['total_rows'] = $total_records;
                $config['per_page'] = $limit_per_page;
                $config["uri_segment"] = 2;
                 
                $this->pagination->initialize($config);
                 
                // build paging links
                $params["links"] = $this->pagination->create_links();
            }
        $this->load->view('/partes/header');
        $this->load->view('/partes/navbar_adm');
        $this->load->view('/mensajes_view', $params);
        $this->load->view('/partes/footer');
        }else{
           redirect(base_url('login'));     
        }
    }         

    public function listar_mensajes_nombre(){
        if ($this->session->userdata('login')) {
        $data['consultas'] = $this->consultas_model->obtener_consultas($this->input->post('nombre'));
        $this->load->view('/partes/header');
        $this->load->view('/partes/navbar_adm');
        $this->load->view('/mensajes_view', $data);
        $this->load->view('/partes/footer');
        }else{
           redirect(base_url('login'));     
        }
    }         

	public function estado_consultas($id=NULL,$e){
         $data = array(
         'estado'=> $e,
         );
         $this->consultas_model->estado_consulta($data, $id);
            redirect('mensajes');
    }

}

