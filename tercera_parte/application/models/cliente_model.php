<?php
	class Cliente_model extends CI_Model {
		function __construct() {
			parent::__construct();
		}
		
		public function guardar_usuario($correo, $contraseña, $nombre, $apellido, $telefono, $direccion, $perfil_id) {
			$data = array(
			'nombre' => $nombre,
			'apellido' => $apellido,			
			'telefono' => $telefono,
			'direccion' => $direccion,
			'email' => $correo,			
			'perfil_id' => $perfil_id,
			'password' => base64_encode($contraseña),
			'estado'=> '1',
			);
			$this->db->insert('usuarios', $data);
		}
	}