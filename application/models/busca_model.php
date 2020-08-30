<?php
class Busca_model extends CI_Model
{
	public function buscar($busca)
	{
		if(empty($busca))
		{
			return array();
		}

		$busca = $this->input->post('busca');
		$this->db->like('name', $busca);
		return $this->db->get("tb_games")->result_array();
	}
}
