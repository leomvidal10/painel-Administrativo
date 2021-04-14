<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users_model extends CI_Model {

	public function confirmarCadastro($name, $email) {
        $datestring = mdate('%Y-%m-%d %H:%i:%s');
        $data = array(
            'nome' => $name,
            'email' => $email,
            'dataCadastro' => $datestring,
            'ultimaAtualizacao' => $datestring
            );

		$insert = $this->db->insert_string('users', $data);
        $this->db->query($insert);
	}

    public function deletarCadastro($id) {
		$this->db->where('id', $id);
        $this->db->delete('users');
	}

    public function editarUsuario($id, $name, $email) {
        $data = array(
            'nome' => $name,
            'email' => $email,
            'ultimaAtualizacao' => mdate('%Y-%m-%d %H:%i:%s')
            );

		$this->db->where('id', $id);
        $this->db->update('users', $data);
	}

    public function listarUsuarios() {
        return $this->db->get('users')->result_array();
	}

    public function listarUsuario($id) {
        return $this->db->get_where("users", array("id" => $id))->row_array();
    }
}