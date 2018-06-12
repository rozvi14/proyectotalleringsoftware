<?php
defined('BASEPATH') OR exit('No hay Acceso al Script');

class Error404 extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('parametros_model');
		$this->load->model('usuario_model');
	}

	public function index()
	{
		if($this->session->userdata('logueado')){
			
			$this->load->view('header');
			$this->load->view('errors/index2');
			$this->load->view('footer');
		}else{
			redirect('inicio/login');
		}
		
	}

	
}
?>