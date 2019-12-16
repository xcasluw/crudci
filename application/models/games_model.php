<?php

	class Games_model extends CI_model
	{
		public function index()
		{
			$this->db->order_by("id", "DESC");
			return $this->db->get("tb_lucas_genari_clonens_games")->result_array();
		}

		public function dashboard_index()
		{
			$this->db->order_by("id", "DESC");
			$this->db->limit(5);
			return $this->db->get("tb_lucas_genari_clonens_games")->result_array();
		}

		public function store($game)
		{
			$this->db->insert("tb_lucas_genari_clonens_games", $game);
		}

		public function show($id)
		{
			return $this->db->get_where("tb_lucas_genari_clonens_games", array(
				"id" => $id
			))->row_array();
		}

		public function update($id, $game)
		{
			$this->db->where("id", $id);
			return $this->db->update("tb_lucas_genari_clonens_games", $game);
		}

		public function destroy($id)
		{
			$this->db->where("id", $id);
			return $this->db->delete("tb_lucas_genari_clonens_games");
		}
		
	}
