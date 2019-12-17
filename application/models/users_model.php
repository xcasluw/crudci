<?php

	class Users_model extends CI_model
	{
		public function index()
		{
			return $this->db->get("tb_lucas_genari_crudci_users")->result_array();
		}

		public function dashboard_index()
		{
			$this->db->order_by("id", "DESC");
			$this->db->limit(5);
			return $this->db->get("tb_lucas_genari_crudci_users")->result_array();
		}

		public function store($user)
		{
			$this->db->insert("tb_lucas_genari_crudci_users", $user);
		}

		public function show($id)
		{
			return $this->db->get_where("tb_lucas_genari_crudci_users", array(
				"id" => $id
			))->row_array();
		}

		public function update($id, $game)
		{
			$this->db->where("id", $id);
			return $this->db->update("tb_lucas_genari_crudci_users", $game);
		}
		
	}