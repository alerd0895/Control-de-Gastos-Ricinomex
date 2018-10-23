<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {
	function login($username, $password){
		$this->db->where("nombre_usuario",$username);
		$this->db->where("user_contrasenia",$password);
		$resultados = $this->db->get("rici_usuarios");
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		}else{
			return false;
		}
	}
}
