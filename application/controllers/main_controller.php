<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class main_controller extends CI_Controller {

	public function index()
	{
        $this->load->model('users_model');
        $data['usuarios'] = $this->users_model->listarUsuarios();

		$this->load->view('home_page', $data);
	}

	public function editPage($id)
	{
		$this->load->model('users_model');
		$data['usuarios'] = $this->users_model->listarUsuario($id);

		$this->load->view('edit_page', $data);
	}

	public function pesquisar()
	{
        $this->load->model('search_model');
		$data['resultado'] = $this->search_model->search($_POST);

		$this->load->view('home_page', $data);
	}
}