<?php
class Admin extends CI_Controller {

    var $datospreview;
    
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form'));
        $this->load->model('AdminModel');	
        $this->load->model('SupModel');	

        $this->load->model('servicios');

    }
    
    public function index(){
        if($this->session->userdata('login')){
            if($this->session->userdata('tipoUsuario') == "Adm"){
                $this->load->view('admin/homeAdmin');
            }else if($this->session->userdata('tipoUsuario') == "Sup"){
                $this->load->view('admin/supervisor/homeSup');                    
            }
        }else{
                $this->load->view('admin/login');
        }
    }   
    public function login (){
    
        if($this->input->post()){
        $correo = $this->input->post('correo');
        $pass = $this->input->post('password');			
        $this->load->library('form_validation');
        $this->form_validation->set_message('required', 'Favor de completar este campo');
        $this->form_validation->set_error_delimiters('<label style="color:#d9e687">', '</label>'); 
        $this->form_validation->set_rules('correo', 'correo', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');      
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('admin/login');
        }else{									
            $back = $this->AdminModel->login($correo,$pass);
            if($back== "0"){
                $datao["error"] = "Datos incorrectos, favor de verificar";
                $this->load->view('admin/login',$datao);
            }else{
                $tipoUser=$this->AdminModel->getUser('admin',$back);
                if($tipoUser){
                    $user="Adm";
                }else{
                    $tipoUser=$this->AdminModel->getUser('supervisores',$back);
                    if($tipoUser){
                        $user="Sup";
                    }else{
                        echo "error fatal";
                    }
                }
                $sessionData=array('login'=>true,
                    'idUser'=>$tipoUser->id_key,
                    'tipoUsuario'=>$user,
                    'nombre'=>$tipoUser->nombre,
                    'correo'=>$tipoUser->correo,
                    'nacimiento'=>$tipoUser->nacimiento,
                );
                
                $this->session->set_userdata($sessionData);
                if($user == "Adm"){
                    $this->load->view('admin/homeAdmin');
                }else if($user == "Sup"){
                    $this->load->view('admin/supervisor/homeSup');                    
                }
            }
        }
        }else{

        }
    }
		
                public function recuperar(){
                    if($this->input->post()){
                        $correo=$this->input->post('correo');
                        $id=$this->AdminModel->validaEmail($correo);
                        if($id){
                            $link=$this->generarLinkTemporal($id,$correo);
                            $this->enviarCorreoRecoverPass($link,$correo);
                            echo "Se ha enviado un correo para restablecer la contraseña";

                        }else{
                            echo "No existe el correo en nuestra base de datos";
                        }
                    }
		}
		public function restablecer($id,$token){
			$idUser=$this->AdminModel->validaToken($token);
			if(sha1($idUser)==$id){
				$data['id']=$idUser;
				$this->load->view('admin/reestablecer',$data);
			}
			
		}

		public function nuevoPass(){
			$pass1=$this->input->post('pass1');
			$pass2=$this->input->post('pass2');
			if($pass1==$pass2){
				$id=$this->input->post('iduser');
				if($this->AdminModel->actualizarPass($pass1,$id)){
                                    redirect("/admin");
				}else{
					echo "error al actualizar";
				}
			}
		}
                
		public function generarLinkTemporal($id,$correo){
			$cadena = $id.rand(1,9999999).date('Y-m-d');
		  $token = sha1($cadena);
			$enlace= base_url().'Admin/restablecer/'.sha1($id).'/'.$token;
			$this->AdminModel->insertarToken($id,$token,$correo);
			return $enlace;
		}
                
		public function enviarCorreoRecoverPass($link,$correo){
                    $this->load->library('email');
                    $config = Array(
                        'protocol' => 'pop3',
                        'smtp_host' => 'sendavertical.com.mx',
                        'smtp_port' => 110,
                        'smtp_user' => 'hola@sendavertical.com.mx',
                        'smtp_pass' => 'emporiowhite',//my valid email password
                        'mailtype' => 'html',
                        'charset' => 'iso-8859-1',
                        'wordwrap' => TRUE
                    );

                    $this->email->initialize($config);	
                    $this->email->from('hola@sendavertical.com.mx', 'Senda Vertical');
                    $this->email->to($correo); 
                    $this->email->subject('Recuperar password');
                    $data['liga'] = $link;
                    $body = $this->load->view('admin/mailpassrecover',$data,TRUE);
                    //$this->email->message('El enlace es: '.$link);	
                    $this->email->message($body);	
                    $this->email->send();
		}
                
                public function vercorreo(){
                    $this->load->view('admin/mailpassrecover');
                }
                
/*
 * =============================================================================
 * inicia blog
 */
    
    public function blog(){
        $data["blogs"] = $this->AdminModel->getBlogs();
        $this->load->view('admin/blog/listablog',$data);
    }
    
    public function wblog($id){        
        $data = $this->AdminModel->getBlogData($id);
        //$data = $this->session->userdata('data');
        $correo = $this->AdminModel->getDataUsuario($data['autor']);
        $data['mailautor'] = $correo[0]->correo;
        $data['autor'] = $this->AdminModel->getAutor($data['autor']);
        $data['fechashow'] = $this->getDateString($data['fecha_alta']);
        $data['categoria'] = $this->servicios->getDescripcion($data['categoria']);
        
        $this->load->helper('directory');
        $back = "img/blogs/".$id;
        $map = directory_map($back);
        $imagenes = array();
        foreach ($map as $value) {
            array_push($imagenes, $value);
        }
        $data['imagenes'] = $imagenes;

        $this->load->view('admin/blog/vistablog',$data);
    }
                
    public function blognuevo(){
        $data["servicios"] = $this->servicios->getServicios();
        $data["admin"] = $this->AdminModel->getUsuarios();
        $this->load->view('admin/blog/nuevoblog',$data);
    }
    
    public function deleteblog(){
        $id = $this->input->post('id');
        $borrado = $this->AdminModel->deleteBlog($id);
        return $borrado;
    }

    public function saveDataBlog(){
        //limpiamos sasion
        
        $data = $this->input->post();
        $sourcePath = $_FILES;
        $images = array();
        $indice = 0;
        
        //limpiar carpeta fotos
        $back = "img/bannerstemp";
        $this->load->helper('directory');
        $map = directory_map($back);

        foreach($map as $file){
                       
            //lo eliminamos y los archivos restantes tenemos que renombrarlos
            unlink($back."/".$file);
        }
        
        foreach ($sourcePath as $key => $value) {
            if($value["tmp_name"] != "")
            {
                array_push($images, "foto".$indice.".png");
                $sourcePath = $value["tmp_name"]; // Storing source path of the file in a variable
                $targetPath = "img/bannerstemp/foto".$indice.".png";//.$_FILES['file']['name']; // Target path where file is to be stored
                move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file                    
                $indice += 1;
            }
        }
        
        $data["imagenes"] = $images;
        $date = date('Y-m-d H:i:s');
        $data["fecha_alta"] = $date;
        $data["estatus"] = 1;
        $data["fechashow"] = $this->getDateString($date);
        
        //$this->session->sess_destroy();

        $this->session->set_userdata('data',$data);
    }
    
    public function previewblog(){
        $data = $this->session->userdata('data');
        $correo = $this->AdminModel->getDataUsuario($data['autor']);
        $data['mailautor'] = $correo[0]->correo;
        $data['autor'] = $this->AdminModel->getAutor($data['autor']);
        $data['categoria'] = $this->servicios->getDescripcion($data['categoria']);
        $this->load->view('admin/blog/previewblog',$data);
    }
    
    public function saveBlog(){
        //tomas info de sesion y la guardas a base...
        $data = $this->session->userdata('data');
        $idblog = $this->AdminModel->saveBlog($data);
        //lñas fotpos de bannertemp las madnas a la carpeta del blog y las eliminas de carpeta temp
        $back = "img/blogs/".$idblog;
        mkdir($back, 0777);
        $imagenes = $data["imagenes"];
        foreach($imagenes as $value){
            $tempfile = "img/bannerstemp/".$value;
            rename($tempfile, $back."/".$value);                       
        }
        //show modal con carga exitosa
        //window.location.href = liga/con/blogs
    }
    
    public function getDateString($fecha){
        $mes = date('m');
        $dia = date('d');
        $anio = date('Y');
        $mesNombre = "";
        
        switch($mes){
            case "01":
                $mesNombre = "Enero";
                break;
            case "02":
                $mesNombre = "Febrero";
                break;
            case "03":
                $mesNombre = "Marzo";
                break;
            case "04":
                $mesNombre = "Abril";
                break;
            case "05":
                $mesNombre = "Mayo";
                break;
            case "06":
                $mesNombre = "Junio";
                break;
            case "07":
                $mesNombre = "Julio";
                break;
            case "08":
                $mesNombre = "Agosto";
                break;
            case "09":
                $mesNombre = "Septiembre";
                break;
            case "10":
                $mesNombre = "Octubre";
                break;
            case "11":
                $mesNombre = "Noviembre";
                break;
            case "12":
                $mesNombre = "Diciembre";
                break;
        }
        
        return $mesNombre." ".$dia.", ".$anio;
    }

/*
 * =============================================================================
 * admin contacto
 */    
    public function contactMail(){
        $dato = $this->input->post();
        $nombre = $dato["contact_name"];
        $correo = $dato["contact_email"];
        $subject = $dato["contact_subject"];
        $message = $dato["contact_message"];
        $message = nl2br($message); 
        
        //$this->session->set_userdata('maildata',$dato);
        $this->load->library('email');
        $config = Array(
            'protocol' => 'pop3',
            'smtp_host' => 'sendavertical.com.mx',
            'smtp_port' => 110,
            'smtp_user' => 'hola@sendavertical.com.mx',
            'smtp_pass' => 'emporiowhite',//my valid email password
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );

        $this->email->initialize($config);	
        $this->email->from('hola@sendavertical.com.mx', 'Senda Vertical');
        $this->email->to($correo);
        $this->email->cc('administracion@sendavertical.com.mx'); 
        $this->email->subject($subject);
        
        $data['nombre'] = $nombre;
        $data['mensaje'] = $message;
        $body = $this->load->view('admin/mailcontacto',$data,TRUE);
        //$this->email->message('El enlace es: '.$link);	
        $this->email->message($body);	
        $this->email->send();

        echo 'enviado';
    }
    
    public function mailPrueba(){
        $dato = $this->session->userdata('maildata');
        $nombre = $dato["contact_name"];
        $correo = $dato["contact_email"];
        $subject = $dato["contact_subject"];
        $message = $dato["contact_message"];
        $message=nl2br($message); 

        $data['nombre'] = $nombre;
        $data['mensaje'] = $message;

        $this->load->view('admin/mailcontacto',$data);
    }
    
/*
 * =============================================================================
 * inicia CRUD
 */	
	public function usuarios(){
		$admins=$this->AdminModel->getAllUsers("admin");
		$sup=$this->AdminModel->getAllUsers("supervisores");
		$data=array('admins'=>$admins,
		'sup'=>$sup
		);
		$this->load->view('admin/admUsers',$data);
	}
	public function crearUsuario(){
		if($this->session->userdata('login')){
			if($this->input->post()){
				$pass1=$this->input->post('pass1');
				$pass2=$this->input->post('pass2');
				if($pass1!=$pass2){
					echo "La contraseñas no coinciden";
				}else{
				$nombre=$this->input->post('nombre');
				$correo=$this->input->post('correo');
				$fecha_nacim=$this->input->post('nacimiento');
				$tipo_user=$this->input->post('tipoUser');				
				
				if($this->AdminModel->crearUsuario($nombre,$correo,$pass1,$fecha_nacim,$tipo_user)){
					echo "Se ha registrado el nuevo usuario con éxito";
				}else{
					echo "Hubo un problema en la creación del usuario, intente más tarde";
				}
				}

			}else{
				$this->load->view('admin/crearUsuario');
			}
		}else{
			$this->load->view('admin/login');
		}
	}
	public function updateUsuario($tipo,$id){
		if($this->session->userdata('login')){
			if($this->input->post()){
				$pass1=$this->input->post('pass1');
				$pass2=$this->input->post('pass2');				
			  if($pass1!=$pass2){
					echo "La contraseñas no coinciden";
				}else{
				$id=$this->input->post('idUser');
				$nombre=$this->input->post('nombre');
				$correo=$this->input->post('correo');
				$fecha_nacim=$this->input->post('nacimiento');
				$tipo_user=$this->input->post('tipoUser');
				if($this->AdminModel->updateUsuario($nombre,$correo,$pass1,$fecha_nacim,$tipo_user,$id)){
					echo "Se ha actualizado la información con éxito";
				}else{
					echo "Hubo un problema en la actualización del usuario, intente más tarde";
				}
				}
			}else{
				$res=$this->AdminModel->getUser($tipo,$id);
				if($tipo=='Admin'){
					$tipo="Adm";
				}else{
					$tipo="Sup";
				}
				if($res){
					$data=array('info'=>$res,
					'tipo'=>$tipo
					);
					$this->load->view('admin/updateUsuario',$data);
			}
				}

		}else{
			$this->load->view('admin/login');
		}
	}	
	public function deleteUsuario($tipo,$id){
		if($this->session->userdata('login')){
			$this->AdminModel->deleteUsuario($id,$tipo);
			//redirect("admin/usuarios");
                        echo "1";
		}else{
			//$this->load->view('admin/login');
                    echo "0";
		}
	
	}
/*
 * =============================================================================
 * inicia edición de perfil
 */	
    public function editarPerfil(){
            $this->load->view('admin/editaPerfil');
    }
	
    public function cerrarSesion(){
            $this->session->sess_destroy();
            redirect('/admin');
    }
        

/*
 * =============================================================================
 * inicia edición para reoprtes
 */	
    public function reportes(){
        //obtener los reportes de los superisores yvisualizaros en una tabla...
        $datos["reportes"] = $this->AdminModel->getReportes();
        $this->load->view('admin/reportes/listareportes',$datos);
    }
    
    
    public function update($id){
        $datos = $this->SupModel->getDataReporte($id);
        $this->load->view('admin/reportes/updatereportes',$datos);  
    }
            
    public function nuevoReporte(){
        $this->load->view('admin/reportes/nuevoreportes');  
    }
    
    /*public function verreporte($id){
        $datos = $this->AdminModel->getDataReporte($id);
        $this->load->view('admin/reportes/reportes',$datos);  
    }*/
}
