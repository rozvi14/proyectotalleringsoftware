<?php
defined('BASEPATH') OR exit('No hay Acceso al Script');
	
class Usuario_model extends CI_Model {

	function __construct(){
		parent::__construct();
		$this->load->database();//conexion a base de datos
	}

	public function obtenerUsuarios(){
		$sql="CALL mostrar_usuarios()";
		$query=$this->db->query($sql);
		if($query->num_rows()>0) return $query;
		else return false;
	}
	public function buscarUsuario($data){
		$sql="CALL buscar_usuario(?,?,?,?,?)";
		$query=$this->db->query($sql,$data);
		if($query->num_rows()>0) return $query;
		else return false;	
	}
	public function agregarUsuario($data){
		$query=$this->db->insert('usuario',
			array(
					'nombres_usuario'=>$data['nombres'],
					'apellidoPat_usuario'=>$data['apellidopat'],
					'apellidoMat_usuario'=>$data['apellidomat'],
					'tipDoc_usuario'=>$data['tipdocumento'],
					'nroDocumento_usuario'=>$data['nrodocumento'],
					'fechaNac_usuario'=>$data['fechanac'],
					'direccion_usuario'=>$data['direccion'],
					'telefono_usuario'=>$data['telefonoUsuario'],
					'email_usuario'=>$data['email'],
					'pass_usuario'=>$data['password'],
					'perfil_usuario'=>$data['perfil'],
					'estado_usuario'=>0,
				)
			);
		if($query) return true;
		else return false;
	}


	public function eliminarUsuario($id){
		$query=$this->db->delete('usuario',array('idUsuario'=>$id));
		return $query;
	}
	/*public function obtenerPerfiles(){
		$this->db->where('estadoPerfil',0);//where de la consulta
		$resul=$this->db->get('perfil');//todo con nombre de tabla
		if($resul->num_rows()>0) return $resul;
		else return false;
	}*/
	public function verificarUsuario($data){
		$sql="select * from usuario where email_usuario='".$data['email']."' and pass_usuario='".$data['password']."'";
		$query=$this->db->query($sql);
		if($query->num_rows()>0) return $query->row();
		else return false;
	}


}
	


?>