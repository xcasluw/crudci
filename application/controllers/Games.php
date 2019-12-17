<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Games extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		permission();
		$this->load->model("games_model");
	}

	public function index()
	{
		$dados["games"]  = $this->games_model->index();
		$dados["title"] = "Games - CodeIgniter";

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/games', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}

	public function new()
	{
		$dados["title"] = "New Game - CodeIgniter";

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/form-games', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}

	public function store()
	{
		$game = $_POST;
		$game["user_id"] = $_SESSION["logged_user"]["id"];
		$this->games_model->store($game);
		redirect("dashboard");
	}

	public function edit($id)
	{
		$dados["game"]  = $this->games_model->show($id);
		$dados["title"] = "Edit Game - CodeIgniter";

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/form-games', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}

	public function update($id)
	{
		$game = $_POST;
		$this->games_model->update($id, $game);
		redirect("dashboard");
	}

	public function destroy($id)
	{
		$this->games_model->destroy($id);
		redirect("dashboard");
	}

	public function mygames()
	{
		$dados["games"]  = $this->games_model->mygames_index();
		$dados["title"] = "My Games - CodeIgniter";

		$this->load->view('templates/header', $dados);
		$this->load->view('templates/nav-top', $dados);
		$this->load->view('pages/my-games', $dados);
		$this->load->view('templates/footer', $dados);
		$this->load->view('templates/js', $dados);
	}

}
