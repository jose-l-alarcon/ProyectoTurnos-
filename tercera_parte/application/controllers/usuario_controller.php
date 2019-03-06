<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Usuario_controller extends CI_Controller {
		function __construct() {
			parent::__construct();
			$this->load->model('usuario_model');
       	 $this->load->library('pagination');
		}
		public function login() {
			$this->form_validation->set_rules('usuario', 'Correo electronico', 'required');
			$this->form_validation->set_rules('contraseña', 'Contraseña', 'required|callback_verificar_password');
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('/partes/header');
				$this->load->view('/partes/navbar');
				$this->load->view('/login_view');
				$this->load->view('/partes/footer');
			} else {
				$this->usuario_logueado();
			}
		}


		function ver_usuarios() {
			if ($this->session->userdata('perfil_id') > 1){
				redirect(base_url('')); 
			}
			if ($this->session->userdata('login')) {
			$params = array();
	        $limit_per_page = 7;
	        $start_index = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
	        $total_records = $this->usuario_model->get_total();
	 
	        if ($total_records > 0) 
	        {
	            // get current page records
	            $params["usuarios"] = $this->usuario_model->get_current_page_records($limit_per_page, $start_index);
	             
	            $config['base_url'] = base_url('ver_usuarios');
	            $config['total_rows'] = $total_records;
	            $config['per_page'] = $limit_per_page;
	            $config["uri_segment"] = 2;
	             
	            $this->pagination->initialize($config);
	             
	            // build paging links
	            $params["links"] = $this->pagination->create_links();
	        }
			$this->load->view('/partes/header');
			$this->load->view('/partes/navbar_adm');
			$this->load->view('/gestionar_usuario_view', $params);
			$this->load->view('/partes/footer');
			}else{
				redirect('login');
			}
		}

		function ver_usuarios_nombre() {
			if ($this->session->userdata('perfil_id') > 1){
				redirect(base_url('')); 
			}
			if ($this->session->userdata('login')) {
			$this->load->model('usuario_model');
			$data['usuarios'] = $this->usuario_model->get_users_name($this->input->post('nombre'));
			$this->load->view('/partes/header');
			$this->load->view('/partes/navbar_adm');
			$this->load->view('/gestionar_usuario_view', $data);
			$this->load->view('/partes/footer');
			}else{
				redirect('login');
			}
		}
	
		function verificar_password($contra) {
			$user = $this->input->post('usuario');
			$pass = $this->input->post('contraseña');
			$contraseña = base64_encode($pass);
			$this->load->model('usuario_model');
			$usuario = $this->usuario_model->buscar_usuario($user, $contraseña);			
			if ($usuario) {
				$estado = $usuario->estado;
				if (!$estado) {
					$this->form_validation->set_message('verificar_password', 'Usuario inactivo');
					return false;
				}
				$datos_usuario = array(
				'id' => $usuario->id,
				'nombre' => $usuario->nombre,
				'email' => $usuario->email,
				'apellido' => $usuario->apellido,
				'direccion' => $usuario->direccion,
				'perfil_id' => $usuario->perfil_id,
				'login' => TRUE
				);
				$this->session->set_userdata($datos_usuario);
				
				return true;
			} else {
				$this->form_validation->set_message('verificar_password', 'Usuario o contraseña incorrectos');
				return false;
			}
		}
		public function usuario_logueado() {
			if ($this->session->userdata('login')){
				switch ($this->session->userdata('perfil_id')) {
					case '1':
						redirect(base_url('gestionar_productos'));
					break;
					case '2':
						redirect(base_url('principal'));
					break;
				}
			}else{
				$this->login();
			}
		}
		public function cerrar_sesion() {
			$this->session->sess_destroy();
			$this->login();
		} 

		function editar_usuario($id=NULL) {
			if ($this->session->userdata('perfil_id') > 1){
				redirect(base_url('')); 
			}
			$this->form_validation->set_rules('nombre', 'Nombre', 'required');
			$this->form_validation->set_rules('apellido', 'Apellido', 'required');
			$this->form_validation->set_rules('direccion', 'Direccion', 'required');
			$this->form_validation->set_rules('telefono', 'Telefono', 'required|integer');
			$this->form_validation->set_rules('email', 'email', 'required');			
			$this->form_validation->set_message('integer', 'El campo %s debe poseer solo numeros enteros'); 
			$this->form_validation->set_message('required', 'El campo %s es obligatorio');	
			if($this->input->post('estado')) {
				$estado=1;
			} else {
				$estado=0;
			}		
			if ($this->form_validation->run() == FALSE) {
				$usuario = $this->usuario_model->obtener_usuario($id);
				foreach($usuario as $row) {
				$data['id'] = $row->id;
				$data['nombre'] = $row->nombre;
				$data['apellido'] = $row->apellido;
				$data['telefono']= $row->telefono;
				$data['direccion']= $row->direccion;
				$data['email'] = $row->email;
				$data['estado']= $row->estado;
				}
				$this->load->view('/partes/header');
				$this->load->view('/partes/navbar_adm');
				$this->load->view('/gestionar_usuario_edicion', $data);
				$this->load->view('/partes/footer');
			} else {
				$data = array(
				'nombre'=> $this->input->post('nombre'),
				'apellido' => $this->input->post('apellido'),
				'telefono' => $this->input->post('telefono'),
				'direccion' => $this->input->post('direccion'),
				'email'=> $this->input->post('email'),
				'estado'=> $this->input->post('estado'),
				);
				$this->usuario_model->actualizar_usuario($data, $id);
				redirect(base_url('ver_usuarios')); 
			}
		}

		function eliminar_usuario($id=NULL) {
			$data = array(
				'estado'=> '0'
			);
			$this->usuario_model->actualizar_usuario($data, $id);
			redirect(base_url('ver_usuarios'));
		}
		function activar_usuario($id=NULL) {
			$data = array(
				'estado'=> '1'
			);
			$this->usuario_model->actualizar_usuario($data, $id);
			redirect(base_url('ver_usuarios'));
		}

	}