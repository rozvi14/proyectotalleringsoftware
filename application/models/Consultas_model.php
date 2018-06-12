<?php
defined('BASEPATH') OR exit('No hay Acceso al Script');
	
class Consultas_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();//conexion a base de datos
	}

	public function consultarVentas($data){
		$sql="CALL MOSTRAR_VENTA_DESPACHO(?,?,?,?,?,?)";
		$query=$this->db->query($sql,$data);
		if($query->num_rows()>0) return $query;
		else return false;
	}


}
	


?>