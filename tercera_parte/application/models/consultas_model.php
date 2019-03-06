<?php
class Consultas_model extends CI_Model {
  function __construct(){
		$this->load->database();
	}

  public function guardar_mensaje($nombre,$email,$telefono,$mensaje){
      $data = array(
      'nombre' => $nombre,                
      'email' => $email,
      'telefono' => $telefono,
      'mensaje' => $mensaje,        
		  );
      $this->db->insert('consultas', $data);
	}

  	public function estado_consulta($data, $id){
     	$this->db->where('id', $id);
     	$this->db->update('consultas', $data);

 	 }
	public function select_consulta() {
      $query = $this->db->get('consultas');
      return $query->result();
	}

  public function obtener_consultas($nombre) {
      $this->db->select('*');
      $this->db->from('consultas');
      $this->db->like('nombre', $nombre);
      $query= $this->db->get();
      return $query->result();
    }
    public function get_current_page_records($limit, $start) 
    {
        $this->db->limit($limit, $start);
        $query = $this->db->get("consultas");
 
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
        return $this->db->count_all("consultas");
    }   

}