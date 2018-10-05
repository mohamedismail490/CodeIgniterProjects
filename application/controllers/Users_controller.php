<?php
/**
 * Created by PhpStorm.
 * User: Mohamed Ismail
 * Date: 5/10/2018
 * Time: 9:30 AM
 */


Class Users_controller extends CI_Controller {

		function __construct()
		{
			parent:: __construct();
			$this->load->library('pagination');
			$this->load->database();
			$this->load->helper('url');
		}


		public function index() {

			$this->load->model('Users_model');

			$query = $this->db->get("users");

			$data['records'] = $query->result();

			$this->load->helper('url');

			$this->load->view('Users_view', $data);



		}

}

?>
