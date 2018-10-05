<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Mohamed Ismail
 * Date: 5/10/2018
 * Time: 9:21 AM
 */


Class Users_model extends CI_Model {

		function __construct()
		{
			parent::__construct();
		}



	public function get_records($limit, $start)
	{
		$this->db->limit($limit, $start);
		$query = $this->db->get("users");

		if ($query->num_rows() > 0)
		{
			foreach ($query->result() as $row)
			{
				$data[] = $row;
			}

			return $data;
		}

		return false;
	}

	public function get_total_count()
	{
		return $this->db->count_all("users");
	}



}

?>
