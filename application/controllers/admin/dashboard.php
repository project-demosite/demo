<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('url','date', 'form'));
		$this->load->library(array('form_validation', 'security'));
	}

	public function index()
	{
		$header = [];
		$header['header_title'] = 'Dashboard';
		
		$content = [];

		$this->load->view("template/admin_header", $header);
		$this->load->view('admin/dashboard', $content);
		$this->load->view("template/admin_footer");
	}

	public function add_product() {
		$this->form_validation->set_rules('pro_name', 'Product Name', 'trim|required|is_unique[product.pro_name]');
		$this->form_validation->set_rules('pro_description', 'Product Description', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			echo validation_errors();
			
		} else {
			$pro_name = $this->input->post('pro_name');
			$pro_description = $this->input->post('pro_description');

			$data = [];
			$data['pro_name'] = $pro_name;
			$data['pro_description'] = $pro_description;

			$this->db->insert('product', $data);
		}
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */