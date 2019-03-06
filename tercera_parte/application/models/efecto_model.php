<?php
	class Efecto_model extends CI_Model {
		function __construct() {
			parent::__construct();
		}
		public function guardar_efecto($data){
			$this->db->insert('productos', $data);
		}
		public function select_efecto(){
			$this->db->select('*');
			$this->db->from('efecto');
			$query= $this->db->get();
			return $query->result();
		}
		public function select_efecto_id($id) {
			$this->db->select('*');
			$this->db->from('productos');
			$this->db->where('id', $id);
			$this->db->where('stock >', 0);
			$query= $this->db->get();
			return $query->result();
		}
	}
