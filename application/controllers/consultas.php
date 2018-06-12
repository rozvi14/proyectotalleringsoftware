<?php
defined('BASEPATH') OR exit('No hay Acceso al Script');

class Consultas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('parametros_model');
		$this->load->model('consultas_model');

	}
	public function index()
	{
		//if($this->session->userdata('logueado')){
			//$data['privilegios']=$this->parametros_model->obtenerPrivilegios($this->session->userdata('perfil_usuario'));
			
			//$data['progCamiones']=$this->programacioncamion_model->obtenerProgramaciones();
			//$data['tipoForm']=1;
			$this->load->view('header');
			$this->load->view('consultas/consultaDespacho');
			$this->load->view('footer');
		
		/*}else{
			redirect('Inicio_control/login');
		}*/
		
	}

	public function ventas(){
		$data['estados']=$this->parametros_model->obtenerParametros(2);
		$this->load->view('header');
		$this->load->view('consultas/despachos',$data);
		$this->load->view('footer');

	}

	public function consultarDespacho(){
		$dato=array(
				'idVenta'=>$this->input->post('idVenta'),
				'progDespachoVenta'=>$this->input->post('progDespachoVenta'),
				'clienteVenta'=>$this->input->post('clienteVenta'),
				'fechaVenta'=>$this->input->post('fechaVenta'),
				'fechaEntregaVenta'=>$this->input->post('fechaEntregaVenta'),
				'estadoVenta'=>$this->input->post('estadoVenta')
			);
		
		$data['estados']=$this->parametros_model->obtenerParametros(2);
		$data['ventas']=$this->consultas_model->consultarVentas($dato);
		$this->load->view('header');
		$this->load->view('consultas/despachos',$data);
		$this->load->view('footer');
	}

	public function buscarFecha(){
		$fecha=$this->input->post('fechaSalidaProgCamion');	
		$data['choferes']=$this->programacioncamion_model->obtenerChoferes($fecha);
		$data['camiones']=$this->programacioncamion_model->obtenerCamiones($fecha);
		$data['progCamiones']=$this->programacioncamion_model->obtenerProgramaciones();
		$data['tipoForm']=2;
		$data['fecha']=$fecha;
		$this->load->view('header');
		$this->load->view('programacionCamion/programacionCamion',$data);
		$this->load->view('footer');

	}
	public function registrarProgramacion(){
		$data=array(
				'camionProgCamion'=>$this->input->post('camionProgCamion'),
				'fechaProgCamion'=>date("Y-m-d"),
				'estadoProgCamion'=>0,
				'choferProgCamion'=>$this->input->post('choferProgCamion'),
				'fechaSalidaProgCamion'=>$this->input->post('fechaSalidaProgCamion'),
				'descripcionProgCamion'=>$this->input->post('descripcionProgCamion')

			);

		if($this->programacioncamion_model->registrarProgramacion($data)){
			$this->session->set_flashdata('mensaje','Se registro la programacion');
		}else
			$this->session->set_flashdata('error','Error en registrar la programacion');
		redirect('programacionCamion');
	}

	public function buscarProducto(){
		//if($this->session->userdata('logueado')){
			$this->db->trans_start();
			$dato=array(
				'idProducto'=>$this->input->post('codigoProducto'),
				'nombreProducto'=>$this->input->post('nameProducto')
			);
			$data['productos']=$this->venta_model->buscarProducto($dato);
			
			//$data['privilegios']=$this->parametros_model->obtenerPrivilegios($this->session->userdata('perfil_usuario'));
			$this->load->view('header');
			$this->load->view('venta/venta',$data);
			$this->load->view('footer');
		
		/*}else{
			redirect('Inicio_control/login');
		}*/

	}

	public function agregarProducto(){
		$data=array(
				'id'=>$this->input->post('idProducto'),
				'qty'=>$this->input->post('cantidadVenta'),
				'price'=>$this->input->post('precioProducto'),
				'name'=>$this->input->post('nombreProducto'),

			);
		$this->cart->insert($data);
		redirect('venta/carrito');
	}
	
	public function carrito(){
		$this->load->view('header');
		$this->load->view('venta/carrito'	);
		$this->load->view('footer');
	}

	public function vaciarcarrito(){
		$this->cart->destroy();
		redirect('venta/carrito');
	}

	public function eliminaritem($rowid){
		$this->cart->remove($rowid);
		redirect('venta/carrito');
	}

	public function registrarVenta(){
		$data=array(
				'clienteVenta'=>$this->input->post('clienteVenta'),
				'fechaVenta'=>date("Y-m-d"),
				'estadoVenta'=>0,
				'horaVenta'=>date("H:i"),
				'descuentoVenta'=>$this->input->post('descuentoVenta'),
				'fechaEntregaVenta'=>$this->input->post('fechaEntregaVenta'),
				'horaEntregaVenta'=>$this->input->post('horaEntregaVenta'),
				'progDespachoVenta'=>null

			);
		$idVenta=$this->venta_model->registrarVenta($data);
		if($idVenta){
			$i=1;
			foreach ($this->cart->contents() as $item) {

				$dato_item=array(
						'idProducto'=>$item['id'],
						'idVenta'=>$idVenta,
						'nroDetalleVenta'=>$i,
						'cantidadVenta'=>$item['qty'],
						'precioVenta'=>$item['subtotal'],
						'estadoRecepcion'=>0
					);
				$resul=$this->venta_model->agregarDetalleVenta($dato_item);
				if($resul){
					$this->venta_model->actualizarProducto($item['id'],$item['qty']);
				}
				$i++;
			}
			$this->cart->destroy();
			$this->session->set_flashdata('mensaje','Venta Registrada Correctamente');
			redirect('inicio');
		}else{
			redirect('venta/carrito');
		}

	}
}
?>