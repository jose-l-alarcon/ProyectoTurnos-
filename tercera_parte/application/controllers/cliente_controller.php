<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Cliente_controller extends CI_Controller {
		function __construct() {
			parent::__construct();
		}
		public function registro() {
			$this->form_validation->set_rules('nombre', 'Nombre del usuario', 'required');
			$this->form_validation->set_rules('apellido', 'Apellido del usuario', 'required');
			$this->form_validation->set_rules('telefono', 'Telefono', 'required|integer');
			$this->form_validation->set_rules('direccion', 'Direccion', 'required');
			$this->form_validation->set_rules('correo', 'Correo Electronico', 'required|valid_email|callback_verificar_correo');			
			$this->form_validation->set_rules('contraseña', 'Contraseña', 'trim|required|min_length[4]');
			$this->form_validation->set_rules('passconf', 'Confirmar password', 'trim|required|matches[contraseña]');
			$this->form_validation->set_message('valid_email', 'El campo %s debe ser un correo válido');
			$this->form_validation->set_message('integer', 'El campo %s debe poseer solo numeros enteros');
			$this->form_validation->set_message('required', 'El campo %s es obligatorio');
			$this->form_validation->set_message('min_length', 'El campo %s debe contener como mínimo
			%d caracteres');
			$this->form_validation->set_message('matches', 'contraseñas no coinciden');
			if ($this->form_validation->run() == FALSE) {
				$this->load->view('/partes/header');
				$this->load->view('/partes/navbar');
				$this->load->view('contenido_registro');
				$this->load->view('/partes/footer');
			} else {
				$this->insertar_cliente();
			}
		}

		public function verificar_correo(){
			$user = $this->input->post('correo');
			$this->load->model('usuario_model');
			$cuenta = $this->usuario_model->buscar_cuenta($user);
			if ($cuenta) {
				$this->form_validation->set_message('verificar_correo', 'El Correo Electronico ya esta registrado');
				return false;
			} else {			
				return true;
			}
		}

		public function insertar_cliente() {
			$nombre = $this->input->post('nombre');
			$apellido = $this->input->post('apellido');
			$telefono = $this->input->post('telefono');			
			$correo = $this->input->post('correo');			
			$direccion = $this->input->post('direccion');			
			$contraseña = $this->input->post('contraseña');
			$perfil_id = 2;

			$this->load->model('cliente_model');			
			$this->cliente_model->guardar_usuario($correo, $contraseña, $nombre, $apellido, $telefono, $direccion, $perfil_id);
			redirect(base_url('login'));
		}
	}