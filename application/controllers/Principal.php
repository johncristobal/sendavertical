<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Principal
 *
 * @author john.cristobal
 */
class Principal extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
    }
    
    public function contacto(){
        $this->load->view('contacto');
    }

    public function nosotros(){
        $this->load->view('nosotros');
    }
    
    public function galeria(){
        $this->load->view('galeria');
    }
        
    public function servicios(){
        $this->load->view('servicios');
    }
}
