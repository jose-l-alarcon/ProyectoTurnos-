<?php

class Pedidos_model extends CI_Model {

    public function guardar_orden_pedido($data){
        
        $this->db->insert('orden_pedido', $data);
        return $this->db->insert_id();
    }
    
    public function guardar_detalle_pedido($data){

    $this->db->insert('detalle_pedido', $data);
    }

    public function select_pedido_id($id){

        $this->db->select('*');
        $this->db->from('detalle_pedido');
        $this->db->where('orden_id', $id);
        $this->db->join('orden_pedido','orden_pedido.id_orden = detalle_pedido.orden_id');
        $this->db->join('productos', 'productos.id_productos = detalle_pedido.id_producto');
        $this->db->join('personas', 'personas.id_personas = orden_pedido.id_personas');
        $query = $this->db->get();
        return $query->result();
    }

    public function select_pedidos(){

        $this->db->select('*');
        $this->db->from('orden_pedido');
        $this->db->order_by('id_orden', 'desc');
        $this->db->join('personas', 'personas.id_personas = orden_pedido.id_personas');
        $query = $this->db->get();
        return $query->result();
    }

}