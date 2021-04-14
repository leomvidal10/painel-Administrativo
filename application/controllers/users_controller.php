<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class users_controller extends CI_Controller {

	public function cadastrar() {
		$this->load->model('users_model');
		$name = $_POST['name'];
		$email = $_POST['email'];

		if(isset($name) && isset($email)) {
			$this->users_model->confirmarCadastro($name, $email);
			$this->load->view('components/sucess');
		}else{
			echo('error');
		}
	}

	public function deletar($id) {
		$this->load->model('users_model');
		$this->users_model->deletarCadastro($id);
		$this->load->view('components/sucess');
	}

	public function editar($id) {
		$this->load->model('users_model');
		
		$name = $_POST['name'];
		$email = $_POST['email'];

		$this->users_model->editarUsuario($id, $name, $email);
		$this->load->view('components/sucess');
	}
}
