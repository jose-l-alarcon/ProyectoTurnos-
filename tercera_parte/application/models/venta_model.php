<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class venta_model extends CI_Model{
		
	/**
    * Constructor de la clase
    */
    public function __construct() {
        parent::__construct();
    }
    function get_ventas($fecha=null)
    {
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->join('ventas_cabecera', 'ventas_cabecera.usuario_id = usuarios.id');
        if ($fecha) {
            $this->db->like('fecha',$fecha);
        }
        $query = $this->db->get();

        if($query->num_rows()>0) {
            return $query->result();
        } else {
            return FALSE;
        }        
    }
    function get_facturas($id){
        $this->db->select('*');
        $this->db->from('productos');
        $this->db->join('ventas_detalle', 'ventas_detalle.producto_id = productos.id');
        $this->db->where('venta_id',$id);
        $query = $this->db->get();
        return $query->result();       
    }
    function get_factura($id){
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->join('ventas_cabecera', 'ventas_cabecera.usuario_id = usuarios.id');
        $this->db->where('ventas_cabecera.id',$id);
        $query = $this->db->get();

        if($query->num_rows()>0) {
            return $query->result();
        } else {
            return FALSE;
        }       
    }

    public function get_current_page_records($limit, $start) 
    {
        $this->db->limit($limit, $start);
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->join('ventas_cabecera', 'ventas_cabecera.usuario_id = usuarios.id');
        $query = $this->db->get();
 
        if ($query->num_rows() > 0) 
        {
            return $query->result();
        }
 
        return false;
    }
public function get_total() 
    {
        return $this->db->count_all("ventas_cabecera");
    }   
} 