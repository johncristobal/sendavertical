<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Servicios
 *
 * @author john.cristobal
 */
class Servicios extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function getServicios(){
        $this->db->select('*');
        $this->db->from('servicios');
        //$this->db->where('t.id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0 )
        {            
            $row = $query->result();
            return $row;
        }
    }

    public function getDescripcion($id){
        $last_row=$this->db->select('descripcion')->from('servicios')->where('id',$id)->limit(1)->get()->row();
        if(isset($last_row))
            return $last_row->descripcion;   
        else
            return "0";   
    }
}
