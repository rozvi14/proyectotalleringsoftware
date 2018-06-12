<?php
defined('BASEPATH') OR exit('No hay Acceso al Script');

class Inicio extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('parametros_model');
		$this->load->model('usuario_model');
	}

	public function index()
	{
		if($this->session->userdata('logueado')){
			//$data['privilegios']=$this->parametros_model->obtenerPrivilegios($this->session->userdata('perfil_usuario'));
			$this->load->view('header');
			$this->load->view('index');
			$this->load->view('footer');
		}else{
			redirect('inicio/login');
		}
		
	}

	public function estadoSesion(){
		if($this->session->userdata('logueado')){

		}else{
			redirect('Inicio_control/login');
		}
	}

	public function login(){
		$this->load->view('login');
	}

	public function register(){
		$data['documentos']=$this->parametros_model->obtenerParametros(1);
		$this->load->view('register',$data);
	}

	public function logueo(){
		$data=array(
				'email'=>$this->input->post('email'),
				'password'=>md5($this->input->post('password'))
			);
		$resul=$this->usuario_model->verificarUsuario($data);
		$priv=array(false,false,false,false,
                    false,false,false,false,
                    false,false,false,false,
                    false,false,false,false
                    );
        
          
		if($resul){
			//$privilegios=$this->parametros_model->obtenerPrivilegios($resul->perfil_usuario);
			/*
	        foreach ($privilegios->result() as $privilegio) {
	          $priv[$privilegio->idPrivilegio-1]=true;
	        }*/
			$user_data=array(
					'idUsuario'=>$resul->idUsuario,
					'nombre_usuario'=>$resul->nombres_Usuario,
					'apellidopat_usuario'=>$resul->apellidoPat_usuario,
					//'privilegios_usuario'=>$priv,
					'fechaRegistro_usuario'=>$resul->fechaRegistro_usuario,
					'logueado'=>TRUE
				);
			$this->session->set_userdata($user_data);
			redirect('inicio');
		}else{
			redirect('inicio/login');
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('inicio/login');
	}
}
?>