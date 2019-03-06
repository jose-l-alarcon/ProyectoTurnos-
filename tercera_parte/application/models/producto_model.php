<?php
	class Producto_model extends CI_Model {
		function __construct() {
			parent::__construct();
		}
		public function guardar_producto($data){
			$this->db->insert('productos', $data);
		}
		public function select_efecto(){
			$query = $this->db->get('efecto');
			return $query->result();
		}
		public function select_producto() {
			$this->db->select('*');
			$this->db->from('productos');
			$this->db->join('efecto', 'efecto.id_efecto= productos.efecto');
			$query= $this->db->get();
			return $query->result();
		}
		public function select_producto_id($id) {
			$this->db->select('*');
			$this->db->from('productos');
			$this->db->where('id', $id);
			$this->db->where('stock >', 0);
			$query= $this->db->get();
			return $query->result();
		}
		public function actualizar_producto($data, $id) {
			$this->db->where('id', $id);
			$this->db->update('productos', $data);
		}
		public function eliminar_producto($data, $id) {
			$this->db->where('id', $id);
			$this->db->update('productos', $data);
		}

		function get_producto($id){

        $query = $this->db->get_where('productos', array('id' => $id),1);
                
        if($query->num_rows() == 1) {
            return $query->result();
        } else {
            return FALSE;
        }
    }

        function get_prod_name($name){
        
        $this->db->like('nombre', $name);
        $query = $this->db->get('productos');
        return $query->result();
         }

        function get_productos($activo=0,$categoria=0){
        if(!$activo and !$categoria){
            $this->db->where('productos.stock >', '0');
            $query = $this->db->get_where('productos', array('estado' => 1 ));
        }elseif(!$activo and $categoria){
            $query = $this->db->get_where('productos', array('estado' => 1, 'efecto' => $categoria));
        }else{
            $query = $this->db->get('productos');
        }
        
        if($query->num_rows()>0) {
            return $query->result();
        } else {
            return FALSE;
        }        
    	}
    public function get_current_page_records($limit, $start) 
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get("productos");
 
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
    public function get_current_page_records_by_effect($limit, $start,$effect) 
    {
        $this->db->limit($limit, $start);
			$this->db->where('efecto', $effect);
        $query = $this->db->get("productos");
 
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
    public function get_total_by_effect($effect) 
    {

		$this->db->where('efecto', $effect);
        $query = $this->db->get("productos");
        return $query->num_rows();
    } 
     
    public function get_total() 
    {
        return $this->db->count_all("productos");
    }   
	}
