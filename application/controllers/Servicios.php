<?php
class Servicios extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
    
    public function index(){
        
    }
    
    public function poda(){
        $this->load->view('servicios/poda');
    }
		 public function remociones(){
        $this->load->view('servicios/remociones');
    }
		 public function trasplantes(){
        $this->load->view('servicios/trasplantes');
    }
		public function plagas(){
        $this->load->view('servicios/Plagas');
    }
		public function suelo(){
        $this->load->view('servicios/suelo');
    }		
		public function riesgo(){
        $this->load->view('servicios/riesgo');
    }		
		public function capacitacion(){
        $this->load->view('servicios/capacitacion');
    }			
		public function trepa(){
        $this->load->view('servicios/trepa');
    }			
}
