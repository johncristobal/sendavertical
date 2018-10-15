<?php 
class AdminModel extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function login($correo,$pass){
        $last_row=$this->db->select('id')->from('usuarios')->where('correo',$correo)->where('password',$pass)->limit(1)->get()->row();
        if(isset($last_row))
            return $last_row->id;   
        else
            return "0";   
    }
		public function validaEmail($correo){
		    $last_row=$this->db->select('id')->from('usuarios')->where('correo',$correo)->limit(1)->get()->row();
        if(isset($last_row))
            return $last_row->id;   
        else
            return false;   	
		}
		public function insertarToken($id,$link,$correo){
		 $data = array(
		 'id' => 0,
		 'iduser' => $id,
		 'correo' => $correo,
		 'token' => $link
		 );
		 $this->db->insert('resetpass',$data);	
		}
		public function validaToken($token){
			  $last_row=$this->db->select('iduser')->from('resetpass')->where('token',$token)->limit(1)->get()->row();
        if(isset($last_row))
            return $last_row->iduser;   
        else
         return "0";   
		}
		public function actualizarPass($pass,$id){
			 $data = array(
            'password' => $pass
        );
        $this->db->where('id', $id);
        return $this->db->update('usuarios', $data);
		}
		public function getUser($tipo,$id){
        $this->db->select('t1.id as id_key,t1.*,t2.*');
        $this->db->from('usuarios t1');
        $this->db->join($tipo.' t2', 't2.id_usuario = t1.id');	 
				$this->db->where('t1.id', $id );	
				$query = $this->db->get();				
				return $query->row();	 			
		}
		public function getAllUsers($tipo){
        $this->db->select('t1.id as id_key,t1.*,t2.*');
        $this->db->from('usuarios t1');
        $this->db->join($tipo.' t2', 't2.id_usuario = t1.id');	  
				$query = $this->db->get();

        if ($query->num_rows() > 0 ){
            $row = $query->result();
            return $row;
        }				
		}
		public function crearUsuario($nombre,$correo,$pass1,$fecha_nacim,$tipo_user){
		 $fechaActual = date('Y-m-d');
		 $data = array(
		 'id' => 0,
		 'correo' => $correo,
		 'password' => $pass1,
		 'fecha_alta' => $fechaActual
		 );
		 $this->db->insert('usuarios',$data);
		 $last_row=$this->db->select('id')->from('usuarios')->where('correo',$correo)->where('password',$pass1)->limit(1)->get()->row();
        if(isset($last_row)){
				$id=$last_row->id;
				 if ($this->crearTipoUsuario($id,$tipo_user,$nombre,$fecha_nacim)){
					 return true;
				 }else{
					 return false;
				 }
				}else{
					return false;
				}
               
		}
		public function crearTipoUsuario($id,$tipo_user,$nombre,$fecha_nacim){
			$data = array(
		 'id' => 0,
		 'nombre' => $nombre,
		 'nacimiento' => $fecha_nacim,
		 'id_usuario' => $id
		 );
		 switch($tipo_user){
			 case "Adm":
			 $tabla="admin";
			 break;
			 case "Sup":
			 $tabla="supervisores";
			 break;			 
		 }
		 if($this->db->insert($tabla,$data)){
			 return true;
		 }else{
			 return false;
		 }
		}
		public function updateUsuario($nombre,$correo,$pass1,$fecha_nacim,$tipo_user,$id){
			
			 $data = array(
			 'correo' => $correo,
			 'password' => $pass1,
        );
        $this->db->where('id', $id);			
        $this->db->update('usuarios', $data);	
				if($this->updateTipoUsuario($id,$tipo_user,$nombre,$fecha_nacim))	{
					return true;
				}else{
					return false;
				}
		}
		public function updateTipoUsuario($id,$tipo_user,$nombre,$fecha_nacim){
			 $data = array(
				 'nombre' => $nombre,
				 'nacimiento' => $fecha_nacim,
        );
			 switch($tipo_user){
				 case 'Adm':
				 $tabla="admin";
				 break;
				 case 'Sup':
				 $tabla="supervisores";
				 break;
			 }				
        $this->db->where('id_usuario', $id);			
        return ($this->db->update($tabla, $data));			
		}
                
    public function deleteUsuario($id,$tabla){
        $this->db->where('id_usuario',$id);
        $this->db->delete($tabla);
        $this->db->where('id',$id);
        $this->db->delete('usuarios');			
    }

//==============================================================================
    public function getUsuarios(){
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('estatus', 1);
        $query = $this->db->get();
        if ($query->num_rows() > 0 )
        {            
            $row = $query->result();
            return $row;
        }
    }

    public function getAutor($id){
        $last_row=$this->db->select('nombre')->from('admin')->where('id',$id)->limit(1)->get()->row();
        if(isset($last_row))
            return $last_row->nombre;   
        else
            return "0";   

    }
    
    public function getDataUsuario($idAdminSuper){
        $this->db->select('*');
        $this->db->from('admin a');
        $this->db->join('usuarios u','u.id = a.id_usuario');
        $this->db->where('a.id', $idAdminSuper);
        $query = $this->db->get();
        if ($query->num_rows() > 0 )
        {            
            $row = $query->result();
            return $row;
        }
    }
    
//==============================================================================BLOG function
    public function getBlogs(){
        $this->db->select('b.id,b.titulo,b.fecha_alta,s.descripcion,a.nombre');
        $this->db->from('blogs b');        
        $this->db->join('servicios s','b.categoria = s.id');
        $this->db->join('admin a','b.autor = a.id');
        $this->db->where('b.estatus', 1);
        $query = $this->db->get();
        if ($query->num_rows() > 0 )
        {            
            $row = $query->result();
            return $row;
        }else{
            return 0;
        }
    }
    
    public function getBlogData($id){
        $this->db->select('b.id,b.titulo,b.fecha_alta,b.texto,b.autor,b.categoria,s.descripcion,a.nombre');
        $this->db->from('blogs b');        
        $this->db->join('servicios s','b.categoria = s.id');
        $this->db->join('admin a','b.autor = a.id');
        $this->db->where('b.estatus', 1);
        $this->db->where('b.id', $id);
        $query = $this->db->limit(1)->get();
        if ($query->num_rows() > 0 )
        {            
            $row = $query->result_array()[0];
            return $row;
        }else{
            return 0;
        }
    }
    
    public function saveBlog($data){
        $datos = array(
            "titulo" => $data["titulo"],
            "categoria" => $data["categoria"],
            "autor" => $data["autor"],
            "texto" => $data["texto"],
            "fecha_alta" => $data["fecha_alta"],
            "estatus" => 1,
        );

        $this->db->insert('blogs', $datos);
        
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }
    
    public function deleteBlog($id){
        $this->db->where('id', $id);
        $this->db->delete('blogs');
    }

//==============================================================================reportes function    
    public function getReportes(){
        $this->db->select("*");
        $this->db->from("reportes_principal");
        $query = $this->db->get();
        
        if($query->num_rows() > 0){
            return $query->result();
        }
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
    
    public function saveReportePrincipal($datos){
        $this->db->insert('reportes_principal', $datos);
        
        $insert_id = $this->db->insert_id();
        return  $insert_id;
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
}

?>