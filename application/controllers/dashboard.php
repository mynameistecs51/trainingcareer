<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->ctl="dashboard";
	}
	public function index()
	{
		$SCREENNAME = "Dashboard";
		$PAGE = "dashboard";
		$this->data['controller'] = $this->ctl;
		$this->mainPage();
		$this->load->view($PAGE,$this->data);
	}

	public function mainPage()
	{
		$this->data['member_name'] = $this->session->userdata('mem_name');
		$this->data['member_lastname'] = $this->session->userdata('mem_lastname');
		$this->data['header'] = $this->template->getHeader(base_url());
		$this->data['footer'] = $this->template->getFooter(base_url());

	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */