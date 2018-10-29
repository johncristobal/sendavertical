<?php 
class SupModel extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function getReportes($id){
        $this->db->select("*");
        $this->db->from("reportes_principal");
        $this->db->where("supervisor",$id);
        $query = $this->db->get();
        
        if($query->num_rows() > 0){
            return $query->result();
        }
    }
//==============================================================================reportes functions
    public function saveReportePrincipal($datos){
        $this->db->insert('reportes_principal', $datos);
        
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }
     
    public function saveReporteContacto($datos){
        $this->db->insert('reportes_contacto', $datos);
        
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }
    
    public function saveData($datos,$tabla){
        $this->db->insert($tabla, $datos);
        
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }
    
    public function deleteReporte($id){
        $this->db->where('id', $id);
        $this->db->delete('reportes_principal');
    }
    
    public function updateReportePrincipal($datos,$id){
        $this->db->where('id', $id);
        $this->db->update('reportes_principal', $datos);
        
        return  1;
    }

    public function updateReporteContacto($datos,$id){
        $this->db->where('id_reporte', $id);
        $this->db->update('reportes_contacto', $datos);
        
        return  1;
    }
    
    public function borrarTablaConId($tabla,$idreporet){
        $this->db->where('id_reporte', $idreporet);
        $this->db->delete($tabla);
    }
    
    public function saveReporteGastos($datos){
        $this->db->insert('reporte_gastos', $datos);
        
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }
    public function saveReporteEquipo($datos){
        $this->db->insert('reporte_equipousado', $datos);
        
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }
    public function saveReporteOtros($datos){
        $this->db->insert('reporte_otros', $datos);
        
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }
    
    public function getDataReporte($id){
        
        $datos = array();
        
        $this->db->select("*");
        $this->db->from("reportes_principal rp");
        $this->db->where("rp.id",$id);
        $data = $this->db->get();
        if($data->num_rows() > 0){
            $datos["reportes"] = $data->result();            
        }else{
            $datos["reportes"] = ''; 
        }        
        
        $this->db->select("*");
        $this->db->from("reporte_gastos rg");
        $this->db->where("rg.id_reporte",$id);
        $datagastos = $this->db->get();
        if($datagastos->num_rows() > 0){
            $datos["gastos"] = $datagastos->result();            
        }else{
            $datos["gastos"] = '';     
        }        

        $this->db->select("*");
        $this->db->from("reporte_otros ro");
        $this->db->where("ro.id_reporte",$id);
        $dataotros = $this->db->get();
        if($dataotros->num_rows() > 0){
            $datos["otros"] = $dataotros->result();            
        }else{
            $datos["otros"] = '';  
        }        

        $this->db->select("*");
        $this->db->from("reporte_equipousado re");
        $this->db->where("re.id_reporte",$id);
        $dataequipo = $this->db->get();
        if($dataequipo->num_rows() > 0){
            $dataequipo = $dataequipo->result();
            $otroindex = 1;
            foreach ($dataequipo as $value) {
                switch ($value->concepto){
                    case "Camion":
                        $datos["camion"] = $value;
                    break;
                    case "Equipo de trepa":
                        $datos["trepa"] = $value;
                    break;
                    case "Motosierras":
                        $datos["motosierra"] = $value;
                    break;
                    case "Equipo de cordaje":
                        $datos["cordaje"] = $value;
                    break;
                    case "Equipo de asperjado":
                        $datos["asperjado"] = $value;
                    break;
                    case "Equipo de limpieza":
                        $datos["limpieza"] = $value;
                    break;
                    default:
                        $datos["otro".$otroindex] = $value;
                        $otroindex = $otroindex+1;
                    break;
                }
            }
        }else{
            $datos["camion"] = '';
            $datos["trepa"] = '';
            $datos["motosierra"] = '';
            $datos["cordaje"] = '';
            $datos["asperjado"] = '';
            $datos["limpieza"] = '';
            $datos["otro1"] = '';
            $datos["otro2"] = '';
        }        
        
//***************************** hoja 2 *****************************************                
        $this->load->library('Mobile_Detect');
        $detect = new Mobile_Detect();
        //reporte _ contacto
        $this->db->select("*");
        $this->db->from("reportes_contacto rp");
        $this->db->where("rp.id_reporte",$id);
        $data = $this->db->get();
        if($data->num_rows() > 0){
            $datos["reportes_contacto"] = $data->result();            
        }else{
            $datos["reportes_contacto"] = ''; 
        }
                
        $this->db->select("*");
        $this->db->from("reporte_direccion ro");
        $this->db->where("ro.id_reporte",$id);
        $dataotros = $this->db->get();
        if($dataotros->num_rows() > 0){
            
            //header("Location: ".$this->config->item('base_url')."/mobile"); exit;
            $fill = [
                "aguaPotable",
                "extinguidor",
                "sisCom",
                "sisComtext",
                "botiquin",
                "sma",
                "inspeccion",
                "emergencia1",
                "llamadaemer",
                "primerosaux",
                "rescate"
            ];
            
            foreach ($dataotros->result() as $valueres) {
                if(in_array($valueres->field, $fill)){
                    $datos["reportes_direccion"][$valueres->field."mobile"] = $valueres->value;
                    $datos["reportes_direccion"][$valueres->field."desktop"] = $valueres->value;
                }else{
                    $datos["reportes_direccion"][$valueres->field."mobile"] = "0";
                    $datos["reportes_direccion"][$valueres->field."desktop"] = "0";
                }
            }
            
        }else{
            $datos["reportes_direccion"] = '';  
        }    
                
        $this->db->select("*");
        $this->db->from("reporte_trabajo rp");
        $this->db->where("rp.id_reporte",$id);
        $data = $this->db->get();
        if($data->num_rows() > 0){
            //if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
        
            $fill = [
                "poda",
                "remocion",
                "manicordaje",
                "ctrlPeatonal",
                "ctrlTransito",
                "caidalibre",
                "desrame",
                "destoconado",
                "remocionArb",
                "astillado",
                "plagas",
                "dostrepa",
                "materialCortado",
                "equipoEsp",
                "otrosDescrip",
                "otrosDescriptext"
            ];
            /*}else{
            
            $fill = [
                "podadesktop",
                "remociondesktop",
                "manicordajedesktop",
                "ctrlPeatonaldesktop",
                "ctrlTransitodesktop",
                "caidalibredesktop",
                "desramedesktop",
                "destoconadodesktop",
                "remocionArbdesktop",
                "astilladodesktop",
                "plagasdesktop",
                "dostrepadesktop",
                "materialCortadodesktop",
                "equipoEspdesktop",
                "otrosDescripdesktop",
                "otrosDescriptextdesktop"
            ];
        }*/
            
            foreach ($data->result() as $valueres) {
                if(in_array($valueres->field, $fill)){
                    $datos["reportes_trabajo"][$valueres->field."mobile"] = $valueres->value;
                    $datos["reportes_trabajo"][$valueres->field."desktop"] = $valueres->value;
                }else{
                    $datos["reportes_trabajo"][$valueres->field."mobile"] = $valueres->value;
                    $datos["reportes_trabajo"][$valueres->field."desktop"] = "0";
                }
            }
            //$datos["reportes_trabajo"] = $data->result();            
        }else{
            $datos["reportes_trabajo"] = ''; 
        }
        
        $this->db->select("*");
        $this->db->from("reporte_peligros ro");
        $this->db->where("ro.id_reporte",$id);
        $dataotros = $this->db->get();
        if($dataotros->num_rows() > 0){
            
            //if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
        
            $fill = [
                "arbolContacto",
                "dma",
                "defEstruct",
                "clima",
                "quimicos",
                "electricidad",
                "electricidadfield",
                "arbolSeco",
                "ramasMuertas",
                "arbolDescortezado",
                "maderaBajo",
                "silvestre",
                "pudricion",
                "cavidades",
                "bardas",
                "peatones",
                "mascotas",
                "jardineria",
                "estructuras",
                "otrosPeligros",
                "otrospeligrosfield"                
            ];
            /*}else{
            $fill = [
                "arbolContactodesktop",
                "dmadesktop",
                "defEstructdesktop",
                "climadesktop",
                "quimicosdesktop",
                "electricidaddesktop",
                "electricidadfielddesktop",
                "arbolSecodesktop",
                "ramasMuertasdesktop",
                "arbolDescortezadodesktop",
                "maderaBajodesktop",
                "silvestredesktop",
                "pudriciondesktop",
                "cavidadesdesktop",
                "bardasdesktop",
                "peatonesdesktop",
                "mascotasdesktop",
                "jardineriadesktop",
                "estructurasdesktop",
                "otrosPeligrosdesktop",
                "otrospeligrosfielddesktop"                
            ];
            }*/
            foreach ($dataotros->result() as $valueres) {
                if(in_array($valueres->field, $fill)){
                    $datos["reporte_peligros"][$valueres->field."mobile"] = $valueres->value;
                    $datos["reporte_peligros"][$valueres->field."desktop"] = $valueres->value;
                }else{
                    $datos["reporte_peligros"][$valueres->field."mobile"] = $valueres->value;
                    $datos["reporte_peligros"][$valueres->field."desktop"] = "0";
                }
            }
            //$datos["reportes_peligros"] = $dataotros->result();            
        }else{
            $datos["reporte_peligros"] = '';  
        }  
        
        $this->db->select("*");
        $this->db->from("reporte_mitigacion rp");
        $this->db->where("rp.id_reporte",$id);
        $data = $this->db->get();
        if($data->num_rows() > 0){
            //if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {
            
            $fill = [
                "equipProt",
                "rcp",
                "supFuego",
                "juntaTrab",
                "inspArbol",
                "inspEquipo",
                "inspMotosierras",
                "equipoCordaje",
                "acordonamiento",
                "comunicacion",
                "supSitio",
                "caida",
                "prevClima",
                "dañoExis",
                "otrosPlan",
                "otrosplanfield"
            ];
            /*}else{
            $fill = [
                "equipProtdesktop",
                "rcpdesktop",
                "supFuegodesktop",
                "juntaTrabdesktop",
                "inspArboldesktop",
                "inspEquipodesktop",
                "inspMotosierrasdesktop",
                "equipoCordajedesktop",
                "acordonamientodesktop",
                "comunicaciondesktop",
                "supSitiodesktop",
                "caidadesktop",
                "prevClimadesktop",
                "dañoExisdesktop",
                "otrosPlandesktop",
                "otrosplanfielddesktop"
            ];
            }*/
            foreach ($data->result() as $valueres) {
                if(in_array($valueres->field, $fill)){
                    $datos["reporte_mitigacion"][$valueres->field."mobile"] = $valueres->value;
                    $datos["reporte_mitigacion"][$valueres->field."desktop"] = $valueres->value;
                }else{
                    $datos["reporte_mitigacion"][$valueres->field."mobile"] = "0";
                    $datos["reporte_mitigacion"][$valueres->field."desktop"] = "0";
                }
            }
            //$datos["reporte_mitigacion"] = $data->result();            
        }else{
            $datos["reporte_mitigacion"] = ''; 
        }
        
        $this->db->select("*");
        $this->db->from("reporte_proteccion ro");
        $this->db->where("ro.id_reporte",$id);
        $dataotros = $this->db->get();
        if($dataotros->num_rows() > 0){
            //if ($detect->isMobile() || $detect->isTablet() || $detect->isAndroidOS()) {

            $fill = [
                "casco",
                "gafas",
                "chaleco",
                "auditiva",
                "mascara",
                "botas",
                "chaparreras",
                "guantes",
                "otrosEquipos",
                "otrosequiposfield"
            ];
            /*}else{
            $fill = [
                "cascodesktop",
                "gafasdesktop",
                "chalecodesktop",
                "auditivadesktop",
                "mascaradesktop",
                "botasdesktop",
                "chaparrerasdesktop",
                "guantesdesktop",
                "otrosEquiposdesktop",
                "otrosequiposfielddesktop"
            ];
            }*/
            foreach ($dataotros->result() as $valueres) {
                if(in_array($valueres->field, $fill)){
                    $datos["reporte_proteccion"][$valueres->field."mobile"] = $valueres->value;
                    $datos["reporte_proteccion"][$valueres->field."desktop"] = $valueres->value;
                }else{
                    $datos["reporte_proteccion"][$valueres->field."mobile"] = "0";
                    $datos["reporte_proteccion"][$valueres->field."desktop"] = $valueres->value;
                }
            }
            //$datos["reporte_proteccion"] = $dataotros->result();            
        }else{
            $datos["reporte_proteccion"] = '';  
        }  
        
        return $datos;
    }
}

?>
