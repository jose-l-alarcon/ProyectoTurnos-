<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Turno_model extends CI_Model {
 

		 public function guardarTurno($data){
         // devuelve un valor verdadero o falso que sera evaluado en el controlador
		 return $this->db->insert("turno",$data);
		 }


    public function getListaTurno(){
       
        $this->db->select('a.*, b.* , c.*');
       $this->db->from('turno a');
       $this->db->join('horas_disponibles b', 'a.id_hora = b.id_hora');
       $this->db->join('paciente c', 'a.idpaciente = c.idpaciente');
       $this->db->where('a.estado', "1");
       $query= $this->db->get();
       return $query->result();

        }

        public function getListaTurnoReportes($fecha_turno){
       
       $this->db->select('a.*, b.* , c.*');
       $this->db->from('turno a');
       $this->db->join('horas_disponibles b', 'a.id_hora = b.id_hora');
       $this->db->join('paciente c', 'a.idpaciente = c.idpaciente');
       $this->db->where("fecha_turno =", $fecha_turno);
       $this->db->where('a.estado', "1");

       $query= $this->db->get();
       return $query->result();

        }


  
    public function getListaTurnoEncontradas($fecha){
       
       //  $this->db->select('a.*, b.*');
       // $this->db->from('turnos a');
       // $this->db->join('horas_disponibles b', 'a.id_hora = b.id_hora');

       // $this->db->where('a.fecha =',$fecha);

       // $query= $this->db->get();
       // return $query->result();

        $fechas = $this->db->query("SELECT DISTINCT a.fecha_turno, b.*
        FROM turno a, horas_disponibles b
        -- inner join horas_disponibles b on a.id_hora = b.id_hora
        -- where a.fecha_turno = '$fecha' and b.id_hora not in (select a.id_hora
        where a.fecha_turno = '$fecha' and b.id_hora not in (select a.id_hora
        from turno a
        where a.fecha_turno = '$fecha' and estado = 1 )");
  

        return $fechas->result();

        }

        public function getListaTurnoEncontradas1(){

        $fechas = $this->db->query("SELECT * from horas_disponibles");
  

        return $fechas->result();

        }
        
        public function cantidadTurnos($fecha){

        // $fechas = $this->db->query("SELECT count(fecha_turno) from turno
        // where fecha_turno = '$fecha' and estado = 0");
        // return $fechas->num_rows();
        $this->db->select('*');
        $this->db->from('turno');
        $this->db->where("fecha_turno =", $fecha);
        $this->db->where('estado', "1");
        $query= $this->db->get();
        return $query->num_rows();

        }
       // -- $this->db->select('a.*, b.*');
       // -- $this->db->from('turnos a');
       // -- $this->db->join('horas_disponibles b', 'a.id_hora = b.id_hora');

       // -- $this->db->where('a.fecha =',$fecha);

       // -- $query= $this->db->get();
       // -- return $query->result();
   
   
          public function confirmarTurno($id_hora){
          $this->db->where("id_hora",$id_hora);
          $resultado = $this->db->get("horas_disponibles");
          return $resultado->row();

             }

          public function confirmarfecha($fecha){
          $this->db->where("fecha_turno",$fecha);
          $resultado = $this->db->get("turno");
          return $resultado->row();

             }


         
       public function getMisTurnos($idpaciente , $fechaactual){
       
        $this->db->select('a.*, b.*');
        $this->db->from('turno a');
        $this->db->join('horas_disponibles b', 'a.id_hora = b.id_hora');
        $this->db->where("idpaciente",$idpaciente);
        $this->db->where("fecha_turno >=", $fechaactual);
        $this->db->where('estado', "1");

         $query= $this->db->get();
         return $query->result();




        }


        
        public function turnoAcancelar($idturno){
          $this->db->select('a.*, b.*');
         $this->db->from('turno a');
         $this->db->join('horas_disponibles b', 'a.id_hora = b.id_hora');
        $this->db->where("idturno",$idturno);
         $query= $this->db->get();
         return $query->row();
        
       }

        public function eliminarTurno($idturno, $data){
          $this->db->where("idturno",$idturno);
          return $this->db->update("turno",$data);
        
       }
         

      public function actualizarTurno($idturno, $data){
          $this->db->where("idturno",$idturno);
          return $this->db->update("turno",$data);
        
       }
      
      public function datosTurno($idturno){
      $this->db->where("idturno",$idturno);
      $resultado = $this->db->get("turno");
      return $resultado->row();
       }
      
       public function rowCount($tabla){
      $this->db->where("estado","1");
      $resultado = $this->db->get($tabla);
      return $resultado->num_rows();
       }

        public function editarPaciente($idpaciente){
          $this->db->where("idpaciente",$idpaciente);
          $resultado = $this->db->get("paciente");
          return $resultado->row();
      }

       public function update($idpaciente,$data){
          $this->db->where("idpaciente",$idpaciente);
          return $this->db->update("paciente",$data);
         
      } 
    
       public function cantidad(){

          $this->db->select('MONTH(fecha_turno) as mes, SUM(estado) as cantidad');
          $this->db->from('turno');
          $this->db->where("fecha_turno >=",'2019-01-01');
          $this->db->where("fecha_turno <=",'2019-12-31');
          $this->db->group_by('mes');
          $this->db->order_by('mes');
          $query= $this->db->get();
          return $query->result();
       } 

}