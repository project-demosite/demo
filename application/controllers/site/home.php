<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$header['header_title'] = 'Home';
		
		$content = [];

		$this->load->view("template/site_header", $header);
		$this->load->view('site/view_home', $content);
		$this->load->view("template/site_footer");
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */