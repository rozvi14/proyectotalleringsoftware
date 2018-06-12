<?php
defined('BASEPATH') OR exit('No hay Acceso al Script');
	
class ProgramacionCamion_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();//conexion a base de datos
	}
	public function obtenerChoferes($fecha){
		$sql="select * from usuario where perfil_usuario=3 and estado_usuario=0 and idUsuario not in (select choferProgCamion from programacion_camion where estadoProgCamion=0 and fechaSalidaProgCamion='".$fecha."' )";
		$query=$this->db->query($sql);
		if($query->num_rows()>0) return $query;
		else return false;
	}

	public function obtenerCamiones($fecha){
		$sql="Select * from camion where estadoCamion=0 and idCamion not in (select camionProgCamion from programacion_camion where estadoProgCamion=0 and fechaSalidaProgCamion='".$fecha."')";
		$query=$this->db->query($sql);
		if($query->num_rows()>0) return $query;
		else return false;
	}

	public function registrarProgramacion($data){
		return $this->db->insert('programacion_camion',$data);

	}
	
	public function obtenerProgramaciones(){
		$query=$this->db->query("SELECT p.idProgCamion,p.fechaSalidaProgCamion,p.fechaProgCamion,c.matriculaCamion as camionProgCamion,CONCAT(u.nombres_usuario,' ',u.apellidoPat_usuario) as choferProgCamion FROM programacion_camion p INNER JOIN camion c on p.camionProgCamion=c.idCamion INNER JOIN usuario u on p.choferProgCamion=u.idUsuario WHERE estadoProgCamion=0");
		if($query->num_rows()>0) return $query;
		else return false;
	}


}
	


?>