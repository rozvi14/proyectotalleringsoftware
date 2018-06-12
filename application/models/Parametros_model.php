<?php
defined('BASEPATH') OR exit('No hay Acceso al Script');
	
class Parametros_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();//conexion a base de datos
	}

	public function obtenerParametros($id_parametro){
		$query="select * from valor_parametro where id_parametro=$id_parametro";
		$resul=$this->db->query($query);
		if($resul->num_rows()>0) return $resul;
		else return false;
	}

	public function obtenerPerfiles(){
		$this->db->where('estadoPerfil',0);//where de la consulta
		$resul=$this->db->get('perfil');//todo con nombre de tabla
		if($resul->num_rows()>0) return $resul;
		else return false;
	}

	public function obtenerPrivilegios($idPerfil){
		$sql="select * from privilegiosperfil where idPerfil=".$idPerfil." and estadoPrivilegioPerfil=0";
		$query=$this->db->query($sql);//todo con nombre de tabla
		$resul=false;
		if($query->num_rows()>0) $resul=$query;
		$query->free_result();
		return $resul;
	}

}
	


?>