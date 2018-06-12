<?php
defined('BASEPATH') OR exit('No hay Acceso al Script');

class ProgramacionDespacho extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('parametros_model');
		$this->load->model('ProgramacionDespacho_model');

	}
	public function index()
	{
		//if($this->session->userdata('logueado')){
			//$data['privilegios']=$this->parametros_model->obtenerPrivilegios($this->session->userdata('perfil_usuario'));
			
			$data['tipoForm']=1;
			$this->load->view('header');
			$this->load->view('programacionDespacho/programacionDespacho',$data);
			$this->load->view('footer');
		
		/*}else{
			redirect('Inicio_control/login');
		}*/
		
	}
	
	public function buscarFecha(){
		$fecha=$this->input->post('fechaSalidaDespacho');
		$data['progCamiones']=$this->ProgramacionDespacho_model->obtenerProgCamiones($fecha);
		$data['ventas']=$this->ProgramacionDespacho_model->obtenerVentas($fecha);
		$data['despachadores']=$this->ProgramacionDespacho_model->obtenerDespachadores($fecha);
		$data['tipoForm']=2;
		$data['fecha']=$fecha;
		$this->load->view('header');
		$this->load->view('programacionDespacho/programacionDespacho',$data);
		$this->load->view('footer');
	}

	public function nuevaProgramacion(){
		$errornueva="";
		$data=array(
				'progCamionProgDespacho'=>$this->input->post('progCamionProgDespacho'),
				'fechaProgDespacho'=>date("Y-m-d H:i:s"),
				'estadoDespacho'=>0,
				'despachadorDespacho'=>$this->input->post('despachadorDespacho'),
				'fechaSalidaDespacho'=>$this->input->post('fechaSalidaDespacho'),
				'horaSalidaDespacho'=>$this->input->post('horaSalidaDespacho'),
				'descripcionProgDespacho'=>$this->input->post('descripcionProgDespacho')

			);
		$idProgDespacho=$this->ProgramacionDespacho_model->registrarProgramacion($data);
		if($idProgDespacho){
			
			$ventas=$this->ProgramacionDespacho_model->obtenerVentas($data['fechaSalidaDespacho']);
			foreach ($ventas->result() as $venta) {
				if(!$this->ProgramacionDespacho_model->actualizarVenta($venta,$idProgDespacho)){
					$errornueva=$errornueva." ".$venta->idVenta;
				}
			}
		}else{
			$this->session->set_flashdata('error','Error en registrar la Programacion ');
		}
		if($errornueva!=""){
			$this->session->set_flashdata('error','Error en registrar la Programacion en '.$errornueva);	
		}else{
			$this->session->set_flashdata('mensaje','Se registro correctamente la Programacion');
		}
		redirect('programacionDespacho');
	}
}
?>