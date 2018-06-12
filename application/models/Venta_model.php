<?php
defined('BASEPATH') OR exit('No hay Acceso al Script');
	
class Venta_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();//conexion a base de datos
	}

	

	public function buscarProducto($data){
		$sql="CALL buscar_producto(?,?)";
		$query=$this->db->query($sql,$data);
		if($query->num_rows()>0) return $query;
		return false;
	}

	public function registrarVenta($data){
		$query=$this->db->insert('venta_despacho',$data);
		if($query){
			$sql="Select idVenta from Venta_despacho where fechaVenta='".$data['fechaVenta']."' and horaVenta='".$data['horaVenta']."'";
			$query=$this->db->query($sql);
			if($query) return $query->row()->idVenta;
			else return false;
		}else return false;
	}

	public function agregarDetalleVenta($data){
		$query=$this->db->insert('detalle_venta',$data);
	}


	public function actualizarProducto($idProducto,$cantidadProducto){
		$existenciaActual=$this->db->query("SELECT * FROM producto WHERE idProducto=".$idProducto)->row()->existenciaProducto;
		$nuevaExistencia=$existenciaActual-$cantidadProducto;
		$query=$this->db->query("UPDATE producto SET existenciaProducto=".$nuevaExistencia." WHERE idProducto=".$idProducto);
		return $query;
	}

}
	


?>