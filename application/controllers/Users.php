<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		permission();
		$this->load->model("users_model");
	}

	public function index()
	{
		$dados["users"]  = $this->users_model->index();
		$dados["title"] = "Users - CodeIgniter";

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/users', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}

	public function edit($id)
	{
		$dados["user"]  = $this->users_model->show($id);
		$dados["title"] = "Edit - CodeIgniter";

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/form-users', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}

	public function update($id)
	{
		$this->load->model("users_model");
		$game = $_POST;
		$this->users_model->update($id, $game);
		redirect("dashboard");
	}
}
