<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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

//			$query = $this->db->get("users");
//
//			$data['records'] = $query->result();
//
//			$this->load->helper('url');
//
//			$this->load->view('Users_view', $data);



			$data = array();
			$limit_per_page = 6;
			$start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$total_records = $this->Users_model->get_total_count();

			if ($total_records > 0)
			{
				// get page records
				$data["records"] = $this->Users_model->get_records($limit_per_page, $start_index);

				$config['base_url'] = base_url() . 'users/index';
				$config['total_rows'] = $total_records;
				$config['per_page'] = $limit_per_page;
				$config["uri_segment"] = 3;
				$config['num_links'] = 2;
				//$config['use_page_numbers'] = TRUE;


				//I Configured the pagination to be styled with BootStrap

				$config['first_link'] = 'First Page';
				$config['last_link'] = 'Last Page';

				$config['full_tag_open'] = '<ul class="pagination">';
				$config['full_tag_close'] = '</ul>';

				$config['first_tag_open'] = '<li class="page-item page-link">';
				$config['last_tag_open'] = '<li class="page-item page-link">';

				$config['next_tag_open'] = '<li class="page-item page-link">';
				$config['prev_tag_open'] = '<li class="page-item page-link">';

				$config['num_tag_open'] = '<li class="page-item page-link">';
				$config['num_tag_close'] = '</li>';

				$config['first_tag_close'] = '</li>';
				$config['last_tag_close'] = '</li>';

				$config['next_tag_close'] = '</li>';
				$config['prev_tag_close'] = '</li>';

				$config['cur_tag_open'] = "<li class=\"  page-item page-link \"><span><b>";
				$config['cur_tag_close'] = "</b></span></li>";





				$this->pagination->initialize($config);

				// build paging links
				$data["links"] = $this->pagination->create_links();
			}

			$this->load->view('Users_view', $data);



		}

}

?>
