<?php
class Usuario_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	function get_users(){
		$this->db->select('id, nombre, apellido, telefono, email, estado, direccion');
		$query = $this->db->get('usuarios');
		return $query->result();
	}

	function get_users_name($name){
		$this->db->select('id, nombre, apellido, telefono, email, estado, direccion');
		$this->db->like('nombre', $name);
		$query = $this->db->get('usuarios');
		return $query->result();
	}

	public function obtener_usuario($id) {
			$this->db->select('*');
			$this->db->from('usuarios');
			$this->db->where('id', $id);
			$query= $this->db->get();
			return $query->result();
		}

	public function buscar_usuario($user, $contraseña) {
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('email', $user);
		$this->db->where('password', $contraseña);
		$query = $this->db->get();
		$resultado = $query->row();
		return $resultado;
	}

	public function buscar_cuenta($usuario) {
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('email', $usuario);
		$query = $this->db->get();
		$resultado = $query->row();
		return $resultado;
	}

	public function actualizar_usuario($data, $id) {
			$this->db->where('id', $id);
			$this->db->update('usuarios', $data);
		}
		public function get_current_page_records($limit, $start) 
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get("usuarios");
 
        if ($query->num_rows() > 0) 
        {
            foreach ($query->result() as $row) 
            {
                $data[] = $row;
            }
             
            return $data;
        }
 
        return false;
    }
		public function get_total() 
    {
        return $this->db->count_all("usuarios");
    } 
}