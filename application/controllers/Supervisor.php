<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Supervisor
 *
 * @author Moon
 */
class Supervisor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form'));
        $this->load->model('SupModel');	
        $this->load->model('servicios');
    }
    
    public function editarPerfil(){
        
    }
    
    public function deleteReporte(){
        $idreporte = $this->input->post('id');
        $borrado = $this->SupModel->deleteReporte($idreporte);
        //borrarmos tablas para que solament agreguemos como ya esta
        $this->SupModel->borrarTablaConId("reporte_equipousado",$idreporte);
        $this->SupModel->borrarTablaConId("reporte_gastos",$idreporte);
        $this->SupModel->borrarTablaConId("reporte_otros",$idreporte);
        return "1";
    }
    
    public function update($id){
        $datos = $this->SupModel->getDataReporte($id);
        $this->load->view('admin/supervisor/updatereportes',$datos);  
    }
        
    public function reportes(){
        //get list reports
        $datos["reportes"] = $this->SupModel->getReportes($this->session->userdata("idUser"));
        $this->load->view('admin/supervisor/listareportes',$datos);
    }
    
    public function nuevoReporte(){
        $datos["users"] = $this->SupModel->getUsuariosCombo();
        $this->load->view('admin/supervisor/nuevoreportes',$datos);  
    }
    
    public function saveReporte(){
        $datos = $this->input->post();
        $tipo = $datos["tipo"];

        //getting data 
        $numcotiza = $datos["numcotizacion".$tipo]; 
        $cliente = $datos["cliente".$tipo];
        $proyecto = $datos["proyecto".$tipo];
        $ingresos = $datos["ingresos".$tipo];
        $formapago = $datos["formapago".$tipo];
        $arreglo = array(
            "supervisor" => $this->session->userdata('idUser'),//["idUser"],
            "fecha" => date( 'Y-m-d H:i:s'),
            "cotizacion" => $numcotiza,
            "cliente" => $cliente,
            "nombre_proyecto" => $proyecto,
            "ingreso" => $ingresos,
            "forma_pago" => $formapago
        );
        //save main data to get id to save other tables
        $idreporte = $this->SupModel->saveReportePrincipal($arreglo);

        //get data gastos nomina---max 6 so...
        for($i=1;$i<=6;$i++){
            //save gasto nomina
            if(isset($datos["gastos".$i.$tipo]) && $datos["gastos".$i.$tipo] != ''){
                $savedatos = array(
                    "nombre" => $datos["gastos".$i.$tipo],
                    "posicion" => $datos["posicion".$i.$tipo],
                    "ingreso" => $datos["ingreso".$i.$tipo],
                    "id_reporte" => $idreporte
                );
                $idtemp = $this->SupModel->saveReporteGastos($savedatos);
            }
            
            //save gastos otros
            if(isset($datos["descripcion".$i.$tipo]) && $datos["descripcion".$i.$tipo] != ''){
                 $savedatos = array(
                    "descripcion" => $datos["descripcion".$i.$tipo],
                    "gasto" => $datos["gastodescripcion".$i.$tipo],
                    "id_reporte" => $idreporte
                );
                $idtemp = $this->SupModel->saveReporteOtros($savedatos); 
            }
        }
        
        //save equuipo reporte
        if(isset($datos["camion".$tipo]) && $datos["camion".$tipo] != ''){
            $savedatos = array(
                "concepto" => "Camion",
                "descripcion" => $datos["camion".$tipo],
                "id_reporte" => $idreporte
            );
            $idtemp = $this->SupModel->saveReporteEquipo($savedatos);

        }
        
        //save equuipo reporte
        if(isset($datos["trepa".$tipo]) && $datos["trepa".$tipo] != ''){
            $savedatos = array(
                "concepto" => "Equipo de trepa",
                "descripcion" => $datos["trepa".$tipo],
                "id_reporte" => $idreporte
            );
            $idtemp = $this->SupModel->saveReporteEquipo($savedatos);
        }
        
        if(isset($datos["motosierra".$tipo]) && $datos["motosierra".$tipo] != ''){
            $savedatos = array(
                "concepto" => "Motosierras",
                "descripcion" => $datos["motosierra".$tipo],
                "id_reporte" => $idreporte
            );
            $idtemp = $this->SupModel->saveReporteEquipo($savedatos);
        }

        if(isset($datos["cordaje".$tipo]) && $datos["cordaje".$tipo] != ''){
            $savedatos = array(
                "concepto" => "Equipo de cordaje",
                "descripcion" => $datos["cordaje".$tipo],
                "id_reporte" => $idreporte
            );
            $idtemp = $this->SupModel->saveReporteEquipo($savedatos);
        }
        
        if(isset($datos["asperjado".$tipo]) && $datos["asperjado".$tipo] != ''){
            $savedatos = array(
                "concepto" => "Equipo de asperjado",
                "descripcion" => $datos["asperjado".$tipo],
                "id_reporte" => $idreporte
            );
            $idtemp = $this->SupModel->saveReporteEquipo($savedatos);
        }
        
        if(isset($datos["limpieza".$tipo]) && $datos["limpieza".$tipo] != ''){
            $savedatos = array(
                "concepto" => "Equipo de limpieza",
                "descripcion" => $datos["limpieza".$tipo],
                "id_reporte" => $idreporte
            );
            $idtemp = $this->SupModel->saveReporteEquipo($savedatos);
        }
        
        if(isset($datos["otrodetail1".$tipo]) && $datos["otrodetail1".$tipo] != ''){
            $savedatos = array(
                "concepto" => $datos["otrodetail1".$tipo],
                "descripcion" => $datos["otro1".$tipo],
                "id_reporte" => $idreporte
            );
            $idtemp = $this->SupModel->saveReporteEquipo($savedatos);
        }
        
        if(isset($datos["otrodetail2".$tipo]) && $datos["otrodetail2".$tipo] != ''){
            $savedatos = array(
                "concepto" => $datos["otrodetail2".$tipo],
                "descripcion" => $datos["otro2".$tipo],
                "id_reporte" => $idreporte
            );
            $idtemp = $this->SupModel->saveReporteEquipo($savedatos);
        }
        
//Ahora guaradmos hoja dos reporte......................................********
        $arreglocontacto = array(
            "lugar" => $datos["lugar".$tipo],//["idUser"],
            "supervisor" => $datos["supervisor".$tipo],
            "telefono" => $datos["telefono".$tipo],
            "fecha" => $datos["fecha".$tipo],
            "nombre_cliente" => $datos["nombrecliente".$tipo],
            "email_cliente" => $datos["emailcliente".$tipo],
            "telefono_cliente" => $datos["telefonocliente".$tipo],
            "hospital" => $datos["hospital".$tipo],
            "telefono_hospital" => $datos["telefonohospital".$tipo],
            "emergencia_hospital" => $datos["telefonoemer".$tipo],
            "id_reporte" => $idreporte
        );
        //save main data to get id to save other tables
        $this->SupModel->saveReporteContacto($arreglocontacto);
        
        foreach ($datos as $key => $value) {
            //salvamos unicamnete la llave sin mobile o desktop
            $llave = "";
            if(strpos($key, 'mobile') !== false){
                $llave = substr($key,0,-6);
            }else{
                $llave = substr($key,0,-7);
            }
            
            if (strpos($value, ',direccion') !== false) {
                $valor = split(",", $value)[0];
                $arreglodireccion = array(
                    "concepto" => $valor,
                    "field" => $llave,
                    "value" => 1,
                    "id_reporte" => $idreporte
                );
                $salver = $this->SupModel->saveData($arreglodireccion,"reporte_direccion");
            }else if (strpos($value, ',trabajo') !== false) {
                $valor = split(",", $value)[0];
                $arreglodireccion = array(
                    "concepto" => $valor,
                    "field" => $llave,
                    "value" => 1,
                    "id_reporte" => $idreporte
                );
                $salver = $this->SupModel->saveData($arreglodireccion,"reporte_trabajo");
            }else if (strpos($value, ',peligros') !== false) {
                $valor = split(",", $value)[0];
                $arreglodireccion = array(
                    "concepto" => $valor,
                    "field" => $llave,
                    "value" => 1,
                    "id_reporte" => $idreporte
                );
                $salver = $this->SupModel->saveData($arreglodireccion,"reporte_peligros");
            }else if (strpos($value, ',mitigacion') !== false) {
                $valor = split(",", $value)[0];
                $arreglodireccion = array(
                    "concepto" => $valor,
                    "field" => $llave,
                    "value" => 1,
                    "id_reporte" => $idreporte
                );
                $salver = $this->SupModel->saveData($arreglodireccion,"reporte_mitigacion");
            }else if (strpos($value, ',proteccion') !== false) {
                $valor = split(",", $value)[0];
                $arreglodireccion = array(
                    "concepto" => $valor,
                    "field" => $llave,
                    "value" => 1,
                    "id_reporte" => $idreporte
                );
                $salver = $this->SupModel->saveData($arreglodireccion,"reporte_proteccion");
            }
        }
        
        //ultimos campos para salvar...
        if(isset($datos["llamadaemer".$tipo]) && $datos["llamadaemer".$tipo] != ''){
            $valor = "Llamada de emeergencia";
            $arreglodireccion = array(
                "concepto" => $valor,
                "field" => "llamadaemer",
                "value" => $datos["llamadaemer".$tipo],
                "id_reporte" => $idreporte
            );
            $salver = $this->SupModel->saveData($arreglodireccion,"reporte_direccion");
        }
        if(isset($datos["primerosaux".$tipo]) && $datos["primerosaux".$tipo] != ''){
            $valor = "Primeros auxilios y RCP";
            $arreglodireccion = array(
                "concepto" => $valor,
                "field" => "primerosaux",
                "value" => $datos["primerosaux".$tipo],
                "id_reporte" => $idreporte
            );
            $salver = $this->SupModel->saveData($arreglodireccion,"reporte_direccion");
        }
        if(isset($datos["rescate".$tipo]) && $datos["rescate".$tipo] != ''){
            $valor = "Rescate aereo";
            $arreglodireccion = array(
                "concepto" => $valor,
                "field" => "rescate",
                "value" => $datos["rescate".$tipo],
                "id_reporte" => $idreporte
            );
            $salver = $this->SupModel->saveData($arreglodireccion,"reporte_direccion");
        }
        if(isset($datos["sisComtext".$tipo]) && $datos["sisComtext".$tipo] != ''){
            $valor = "Sistema de Comunicación detalle";
            $arreglodireccion = array(
                "concepto" => $valor,
                "field" => "sisComtext",
                "value" => $datos["sisComtext".$tipo],
                "id_reporte" => $idreporte
            );
            $salver = $this->SupModel->saveData($arreglodireccion,"reporte_direccion");
        }
        if(isset($datos["otrosDescriptext".$tipo]) && $datos["otrosDescriptext".$tipo] != ''){
            $valor = "Otro trabajo detalle";
            $arreglod = array(
                "concepto" => $valor,
                "field" => "otrosDescriptext",
                "value" => $datos["otrosDescriptext".$tipo],
                "id_reporte" => $idreporte
            );
            $salver = $this->SupModel->saveData($arreglod,"reporte_trabajo");
        }
        if(isset($datos["electricidadfield".$tipo]) && $datos["electricidadfield".$tipo] != ''){
            $valor = "Electricidad detalle";
            $arreglod = array(
                "concepto" => $valor,
                "field" => "electricidadfield",
                "value" => $datos["electricidadfield".$tipo],
                "id_reporte" => $idreporte
            );
            $salver = $this->SupModel->saveData($arreglod,"reporte_peligros");
        }
        if(isset($datos["otrosplanfield".$tipo]) && $datos["otrosplanfield".$tipo] != ''){
            $valor = "Mitigacion detalle";
            $arreglod = array(
                "concepto" => $valor,
                "field" => "otrosplanfield",
                "value" => $datos["otrosplanfield".$tipo],
                "id_reporte" => $idreporte
            );
            $salver = $this->SupModel->saveData($arreglod,"reporte_mitigacion");
        }if(isset($datos["otrosequiposfield".$tipo]) && $datos["otrosequiposfield".$tipo] != ''){
            $valor = "Proteccion detalle";
            $arreglod = array(
                "concepto" => $valor,
                "field" => "otrosequiposfield",
                "value" => $datos["otrosequiposfield".$tipo],
                "id_reporte" => $idreporte
            );
            $salver = $this->SupModel->saveData($arreglod,"reporte_proteccion");
        }
        
//=========== firmas ========================
        for($i=1;$i<=8;$i++){
            //save gasto nomina
            if(isset($datos["firma".$i.$tipo]) && $datos["firma".$i.$tipo] != ''){
                $savedatos = array(
                    "nombre" => $datos["nombre".$i.$tipo],
                    "firma" => $datos["firma".$i.$tipo],
                    "id_reporte" => $idreporte
                );
                $idtemp = $this->SupModel->saveData($savedatos,"reporte_firmas");
            }
        }
        
        echo "1";
    }          
    
    public function updateReporte(){
        $datos = $this->input->post();
        $tipo = $datos["tipo"];
        $idreporte = $datos["idreporte"];

        //getting data 
        $numcotiza = $datos["numcotizacion".$tipo]; 
        $cliente = $datos["cliente".$tipo];
        $proyecto = $datos["proyecto".$tipo];
        $ingresos = $datos["ingresos".$tipo];
        $formapago = $datos["formapago".$tipo];
        $arreglo = array(
            "supervisor" => $this->session->userdata('idUser'),//["idUser"],
            "fecha" => date( 'Y-m-d H:i:s'),
            "cotizacion" => $numcotiza,
            "cliente" => $cliente,
            "nombre_proyecto" => $proyecto,
            "ingreso" => $ingresos,
            "forma_pago" => $formapago
        );
        //save main data to get id to save other tables
        $this->SupModel->updateReportePrincipal($arreglo,$idreporte);

        //borrarmos tablas para que solament agreguemos como ya esta
        $this->SupModel->borrarTablaConId("reporte_equipousado",$idreporte);
        $this->SupModel->borrarTablaConId("reporte_gastos",$idreporte);
        $this->SupModel->borrarTablaConId("reporte_otros",$idreporte);

        //get data gastos nomina---max 6 so...
        for($i=1;$i<=6;$i++){
            //save gasto nomina
            if(isset($datos["gastos".$i.$tipo]) && $datos["gastos".$i.$tipo] != ''){
                $savedatos = array(
                    "nombre" => $datos["gastos".$i.$tipo],
                    "posicion" => $datos["posicion".$i.$tipo],
                    "ingreso" => $datos["ingreso".$i.$tipo],
                    "id_reporte" => $idreporte
                );
                $idtemp = $this->SupModel->saveReporteGastos($savedatos);
            }
            
            //save gastos otros
            if(isset($datos["descripcion".$i.$tipo]) && $datos["descripcion".$i.$tipo] != ''){
                 $savedatos = array(
                    "descripcion" => $datos["descripcion".$i.$tipo],
                    "gasto" => $datos["gastodescripcion".$i.$tipo],
                    "id_reporte" => $idreporte
                );
                $idtemp = $this->SupModel->saveReporteOtros($savedatos); 
            }
        }
        
        //save equuipo reporte
        if(isset($datos["camion".$tipo]) && $datos["camion".$tipo] != ''){
            $savedatos = array(
                "concepto" => "Camion",
                "descripcion" => $datos["camion".$tipo],
                "id_reporte" => $idreporte
            );
            $idtemp = $this->SupModel->saveReporteEquipo($savedatos);

        }
        
        //save equuipo reporte
        if(isset($datos["trepa".$tipo]) && $datos["trepa".$tipo] != ''){
            $savedatos = array(
                "concepto" => "Equipo de trepa",
                "descripcion" => $datos["trepa".$tipo],
                "id_reporte" => $idreporte
            );
            $idtemp = $this->SupModel->saveReporteEquipo($savedatos);
        }
        
        if(isset($datos["motosierra".$tipo]) && $datos["motosierra".$tipo] != ''){
            $savedatos = array(
                "concepto" => "Motosierras",
                "descripcion" => $datos["motosierra".$tipo],
                "id_reporte" => $idreporte
            );
            $idtemp = $this->SupModel->saveReporteEquipo($savedatos);
        }

        if(isset($datos["cordaje".$tipo]) && $datos["cordaje".$tipo] != ''){
            $savedatos = array(
                "concepto" => "Equipo de cordaje",
                "descripcion" => $datos["cordaje".$tipo],
                "id_reporte" => $idreporte
            );
            $idtemp = $this->SupModel->saveReporteEquipo($savedatos);
        }
        
        if(isset($datos["asperjado".$tipo]) && $datos["asperjado".$tipo] != ''){
            $savedatos = array(
                "concepto" => "Equipo de asperjado",
                "descripcion" => $datos["asperjado".$tipo],
                "id_reporte" => $idreporte
            );
            $idtemp = $this->SupModel->saveReporteEquipo($savedatos);
        }
        
        if(isset($datos["limpieza".$tipo]) && $datos["limpieza".$tipo] != ''){
            $savedatos = array(
                "concepto" => "Equipo de limpieza",
                "descripcion" => $datos["limpieza".$tipo],
                "id_reporte" => $idreporte
            );
            $idtemp = $this->SupModel->saveReporteEquipo($savedatos);
        }
        
        if(isset($datos["otrodetail1".$tipo]) && $datos["otrodetail1".$tipo] != ''){
            $savedatos = array(
                "concepto" => $datos["otrodetail1".$tipo],
                "descripcion" => $datos["otro1".$tipo],
                "id_reporte" => $idreporte
            );
            $idtemp = $this->SupModel->saveReporteEquipo($savedatos);
        }
        
        if(isset($datos["otrodetail2".$tipo]) && $datos["otrodetail2".$tipo] != ''){
            $savedatos = array(
                "concepto" => $datos["otrodetail2".$tipo],
                "descripcion" => $datos["otro2".$tipo],
                "id_reporte" => $idreporte
            );
            $idtemp = $this->SupModel->saveReporteEquipo($savedatos);
        }
        
//Ahora guaradmos hoja dos reporte......................................********
        $arreglocontacto = array(
            "lugar" => $datos["lugar".$tipo],//["idUser"],
            "supervisor" => $datos["supervisor".$tipo],
            "telefono" => $datos["telefono".$tipo],
            "fecha" => $datos["fecha".$tipo],
            "nombre_cliente" => $datos["nombrecliente".$tipo],
            "email_cliente" => $datos["emailcliente".$tipo],
            "telefono_cliente" => $datos["telefonocliente".$tipo],
            "hospital" => $datos["hospital".$tipo],
            "telefono_hospital" => $datos["telefonohospital".$tipo],
            "emergencia_hospital" => $datos["telefonoemer".$tipo],
        );
        //save main data to get id to save other tables
        //$this->SupModel->saveReporteContacto($arreglocontacto);
        $this->SupModel->updateReporteContacto($arreglocontacto,$idreporte);
                
        $this->SupModel->borrarTablaConId("reporte_direccion",$idreporte);
        $this->SupModel->borrarTablaConId("reporte_trabajo",$idreporte);
        $this->SupModel->borrarTablaConId("reporte_peligros",$idreporte);
        $this->SupModel->borrarTablaConId("reporte_mitigacion",$idreporte);
        $this->SupModel->borrarTablaConId("reporte_proteccion",$idreporte);
        $this->SupModel->borrarTablaConId("reporte_firmas",$idreporte);
        
        foreach ($datos as $key => $value) {
            //salvamos unicamnete la llave sin mobile o desktop
            $llave = "";
            if(strpos($key, 'mobile') !== false){
                $llave = substr($key,0,-6);
            }else{
                $llave = substr($key,0,-7);
            }
            
            if (strpos($value, ',direccion') !== false) {
                $valor = split(",", $value)[0];
                $arreglodireccion = array(
                    "concepto" => $valor,
                    "field" => $llave,
                    "value" => 1,
                    "id_reporte" => $idreporte
                );
                $salver = $this->SupModel->saveData($arreglodireccion,"reporte_direccion");
            }else if (strpos($value, ',trabajo') !== false) {
                $valor = split(",", $value)[0];
                $arreglodireccion = array(
                    "concepto" => $valor,
                    "field" => $llave,
                    "value" => 1,
                    "id_reporte" => $idreporte
                );
                $salver = $this->SupModel->saveData($arreglodireccion,"reporte_trabajo");
            }else if (strpos($value, ',peligros') !== false) {
                $valor = split(",", $value)[0];
                $arreglodireccion = array(
                    "concepto" => $valor,
                    "field" => $llave,
                    "value" => 1,
                    "id_reporte" => $idreporte
                );
                $salver = $this->SupModel->saveData($arreglodireccion,"reporte_peligros");
            }else if (strpos($value, ',mitigacion') !== false) {
                $valor = split(",", $value)[0];
                $arreglodireccion = array(
                    "concepto" => $valor,
                    "field" => $llave,
                    "value" => 1,
                    "id_reporte" => $idreporte
                );
                $salver = $this->SupModel->saveData($arreglodireccion,"reporte_mitigacion");
            }else if (strpos($value, ',proteccion') !== false) {
                $valor = split(",", $value)[0];
                $arreglodireccion = array(
                    "concepto" => $valor,
                    "field" => $llave,
                    "value" => 1,
                    "id_reporte" => $idreporte
                );
                $salver = $this->SupModel->saveData($arreglodireccion,"reporte_proteccion");
            }
        }
        
        //ultimos campos para salvar...
        if(isset($datos["llamadaemer".$tipo]) && $datos["llamadaemer".$tipo] != ''){
            $valor = "Llamada de emeergencia";
            $arreglodireccion = array(
                "concepto" => $valor,
                "field" => "llamadaemer",
                "value" => $datos["llamadaemer".$tipo],
                "id_reporte" => $idreporte
            );
            $salver = $this->SupModel->saveData($arreglodireccion,"reporte_direccion");
        }
        if(isset($datos["primerosaux".$tipo]) && $datos["primerosaux".$tipo] != ''){
            $valor = "Primeros auxilios y RCP";
            $arreglodireccion = array(
                "concepto" => $valor,
                "field" => "primerosaux",
                "value" => $datos["primerosaux".$tipo],
                "id_reporte" => $idreporte
            );
            $salver = $this->SupModel->saveData($arreglodireccion,"reporte_direccion");
        }
        if(isset($datos["rescate".$tipo]) && $datos["rescate".$tipo] != ''){
            $valor = "Rescate aereo";
            $arreglodireccion = array(
                "concepto" => $valor,
                "field" => "rescate",
                "value" => $datos["rescate".$tipo],
                "id_reporte" => $idreporte
            );
            $salver = $this->SupModel->saveData($arreglodireccion,"reporte_direccion");
        }
        if(isset($datos["sisComtext".$tipo]) && $datos["sisComtext".$tipo] != ''){
            $valor = "Sistema de Comunicación detalle";
            $arreglodireccion = array(
                "concepto" => $valor,
                "field" => "sisComtext",
                "value" => $datos["sisComtext".$tipo],
                "id_reporte" => $idreporte
            );
            $salver = $this->SupModel->saveData($arreglodireccion,"reporte_direccion");
        }
        if(isset($datos["otrosDescriptext".$tipo]) && $datos["otrosDescriptext".$tipo] != ''){
            $valor = "Otro trabajo detalle";
            $arreglod = array(
                "concepto" => $valor,
                "field" => "otrosDescriptext",
                "value" => $datos["otrosDescriptext".$tipo],
                "id_reporte" => $idreporte
            );
            $salver = $this->SupModel->saveData($arreglod,"reporte_trabajo");
        }
        if(isset($datos["electricidadfield".$tipo]) && $datos["electricidadfield".$tipo] != ''){
            $valor = "Electricidad detalle";
            $arreglod = array(
                "concepto" => $valor,
                "field" => "electricidadfield",
                "value" => $datos["electricidadfield".$tipo],
                "id_reporte" => $idreporte
            );
            $salver = $this->SupModel->saveData($arreglod,"reporte_peligros");
        }
        if(isset($datos["otrosplanfield".$tipo]) && $datos["otrosplanfield".$tipo] != ''){
            $valor = "Mitigacion detalle";
            $arreglod = array(
                "concepto" => $valor,
                "field" => "otrosplanfield",
                "value" => $datos["otrosplanfield".$tipo],
                "id_reporte" => $idreporte
            );
            $salver = $this->SupModel->saveData($arreglod,"reporte_mitigacion");
        }if(isset($datos["otrosequiposfield".$tipo]) && $datos["otrosequiposfield".$tipo] != ''){
            $valor = "Proteccion detalle";
            $arreglod = array(
                "concepto" => $valor,
                "field" => "otrosequiposfield",
                "value" => $datos["otrosequiposfield".$tipo],
                "id_reporte" => $idreporte
            );
            $salver = $this->SupModel->saveData($arreglod,"reporte_proteccion");
        }       
        
        //=========== firmas ========================
        for($i=1;$i<=8;$i++){
            //save gasto nomina
            if(isset($datos["firma".$i.$tipo]) && $datos["firma".$i.$tipo] != ''){
                $savedatos = array(
                    "nombre" => $datos["nombre".$i.$tipo],
                    "firma" => $datos["firma".$i.$tipo],
                    "id_reporte" => $idreporte
                );
                $idtemp = $this->SupModel->saveData($savedatos,"reporte_firmas");
            }
        }
        echo "1";
    }    
}
