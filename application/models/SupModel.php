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
     
    public function deleteReporte($id){
        $this->db->where('id', $id);
        $this->db->delete('reportes_principal');
    }
    
    public function updateReportePrincipal($datos,$id){
        $this->db->where('id', $id);
        $this->db->update('reportes_principal', $datos);
        
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
        
        return $datos;

    }
}

?>