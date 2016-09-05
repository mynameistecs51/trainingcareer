<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$data['header'] = $this->load->view('header');
		$data['footer'] = $this->load->view('footer');
		$this->load->view('index',$data);
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */