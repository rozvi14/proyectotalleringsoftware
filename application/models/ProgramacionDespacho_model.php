<?php
defined('BASEPATH') OR exit('No hay Acceso al Script');
	
class ProgramacionDespacho_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();//conexion a base de datos
	}
	public function obtenerDespachadores($fecha){
		$sql="SELECT * from usuario where perfil_usuario=4 and estado_usuario=0 and idUsuario not in ( select despachadorDespacho from programacion_despacho where estadoDespacho=0 and fechaSalidaDespacho='".$fecha."')";
		$query=$this->db->query($sql);
		if($query->num_rows()>0) return $query;
		else return false;
	}

	public function obtenerProgCamiones($fecha){
		$sql="SELECT p.idProgCamion,c.matriculaCamion as camionProgCamion,u.nombres_usuario as choferProgCamion FROM programacion_camion p INNER JOIN camion c on p.camionProgCamion=c.idCamion INNER JOIN usuario u on p.choferProgCamion=u.idUsuario WHERE p.estadoProgCamion<>0 and p.fechaSalidaProgCamion='".$fecha."'";
		$query=$this->db->query($sql);
		if($query->num_rows()>0) return $query;
		else return false;

	}

	public function obtenerVentas($fecha){
		$sql="SELECT CONCAT(u.nombres_usuario,' ',u.apellidoPat_usuario) as clienteVenta,v.fechaVenta,v.fechaEntregaVenta,v.horaEntregaVenta FROM venta_despacho v INNER JOIN usuario u ON u.idUsuario=v.clienteVenta WHERE v.progDespachoVenta is null and v.fechaEntregaVenta='".$fecha."' ORDER BY v.horaEntregaVenta";
		$query=$this->db->query($sql);
		if($query->num_rows()>0) return $query;
		else return false;


	}

	public function registrarProgramacion($data){
		if($this->db->insert('programacion_despacho',$data)){
			$query=$this->db->query("SELECT * FROM programacion_despacho WHERE fechaProgDespacho='".$data['fechaProgDespacho']."'");
			if($query){
				return $query->row()->idProgDespacho;
			}else return false;
		}else return false;

	}

	public function actualizarVenta($venta,$idProgDespacho){
		$sql="UPDATE venta_despacho SET progDespachoVenta=".$idProgDespacho." WHERE idVenta=".$venta->idVenta;
		return $query=$this->db->query($sql);
	}




}
	


?>