<?php
defined('BASEPATH') OR exit('No hay Acceso al Script');

class Seguridad extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('parametros_model');
		$this->load->model('usuario_model');

	}
	public function index()
	{
		//if($this->session->userdata('logueado')){
			//$data['privilegios']=$this->parametros_model->obtenerPrivilegios($this->session->userdata('perfil_usuario'));
			$data['documentos']=$this->parametros_model->obtenerParametros(1);
			$data['perfiles']=$this->parametros_model->obtenerPerfiles();
			$data['usuarios']=$this->usuario_model->obtenerUsuarios();
			$this->load->view('header',$data);
			$this->load->view('seguridad/usuario',$data);
			$this->load->view('footer');
		
		/*}else{
			redirect('Inicio_control/login');
		}*/
		
	}
	public function perfil()
	{
		//if($this->session->userdata('logueado')){
			//$data['privilegios']=$this->parametros_model->obtenerPrivilegios($this->session->userdata('perfil_usuario'));
			$this->load->view('header',$data);
			$this->load->view('seguridad/perfil');
			$this->load->view('footer');
		/*}else{
			redirect('Inicio_control/login');
		}*/
		
	}
	public function buscarusuario(){
		$dato=array(
			'nombres'=>$this->input->post('nombres'),
			'apellidopat'=>$this->input->post('apellidopat'),
			'apellidomat'=>$this->input->post('apellidomat'),
			'tipdocumento'=>$this->input->post('tipdocumento'),
			'nrodocumento'=>$this->input->post('nrodocumento')
		);
		$data['documentos']=$this->parametros_model->obtenerParametros(1);
		$data['perfiles']=$this->parametros_model->obtenerPerfiles();
		$data['usuarios']=$this->usuario_model->buscarUsuario($dato);
		if(!$data['usuarios']){
			$data['usuarios']=$this->usuario_model->obtenerUsuarios();	
		}
		//$data['privilegios']=$this->parametros_model->obtenerPrivilegios($this->session->userdata('perfil_usuario'));
		$this->load->view('header',$data);
		$this->load->view('seguridad/usuario',$data);
		$this->load->view('footer');
	
	}

	public function nuevousuario(){
		$data=array(
			'nombres'=>$this->input->post('nombres'),
			'apellidopat'=>$this->input->post('apellidopat'),
			'apellidomat'=>$this->input->post('apellidomat'),
			'tipdocumento'=>$this->input->post('tipdocumento'),
			'nrodocumento'=>$this->input->post('nrodocumento'),
			'fechanac'=>$this->input->post('fechanac'),
			'direccion'=>$this->input->post('direccion'),
			'telefonoUsuario'=>$this->input->post('telefonoUsuario'),
			'email'=>$this->input->post('email'),
			'perfil'=>$this->input->post('perfil'),
			'password'=>md5($this->input->post('password')),
			'reppassword'=>md5($this->input->post('reppassword')),
			'tipregistro'=>$this->input->post('tipregistro')
		);
		//if(!isset($data['nombres']) && !isset($data['apellidopat']) && !isset($data['apellidomat']) && !isset($data['nrodocumento']) && !isset($data['email']) && !isset($data['password']) && !isset($data['reppassword'])){
			if($data['password']==$data['reppassword']){
				$resul=$this->usuario_model->agregarUsuario($data);
				if($resul){ 
					switch ($data['tipregistro']) {
						case 1:
							$this->session->set_flashdata('mensaje','Se registro al usuario con exito');
							redirect('seguridad');
							break;
						case 2:
							$this->session->set_flashdata('mensaje','Se registro al usuario con exito');
							redirect('inicio/login');
						
						default:
							$this->session->set_flashdata('mensaje','Se registro al usuario con exito');
							redirect('inicio/login');
							break;
					}
				}else{
					switch ($data['tipregistro']) {
						case 1:
							$this->session->set_flashdata('error','No se puedo registrar ERROR EN BD');
							redirect('seguridad');
							break;
						case 2:
							$this->session->set_flashdata('error','No se puedo registrar ERROR EN BD');
							redirect('inicio/register');
						
						default:
							$this->session->set_flashdata('error','No se puedo registrar ERROR EN BD');
							redirect('inicio');
							break;
					}
				}
				
			}else{
				switch ($data['tipregistro']) {
						case 1:
							$this->session->set_flashdata('error','No coinciden las contrasenias');
							redirect('seguridad');

							break;
						case 2:
							$this->session->set_flashdata('error','No coinciden las contrasenias');
							redirect('inicio/register');
						
						default:
							$this->session->set_flashdata('error','No coinciden las contrasenias');
							redirect('inicio');
							break;
					}
			}
		/*}else{
			redirect('seguridad');
		}*/

	}

	public function eliminarusuario($id){
		$resul=$this->usuario_model->eliminarUsuario($id);
		$this->session->set_flashdata('mensaje','Se elimino correctamente');
		if($resul) redirect('seguridad');
		else{
			redirect('inicio');
		}
	}
	
}
?>