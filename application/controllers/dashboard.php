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
		$this->mainPage();
		$this->data['controller'] = $this->ctl;
		$this->load->view($PAGE,$this->data);
		$this->load->view('service',$this->data);
		$this->load->view('activity',$this->data);
		$this->load->view('question',$this->data);
		$this->load->view('about',$this->data);
		$this->load->view('team',$this->data);
		$this->load->view('contact',$this->data);
		if($this->session->userdata('id_member') != null){
			echo '';
		}else{
			$this->load->view('login',$this->data);
			$this->load->view('regis',$this->data);
		}
		$this->load->view('footer');
	}

	public function mainPage()
	{
		$this->data['member_name'] = $this->session->userdata('mem_name');
		$this->data['member_lastname'] = $this->session->userdata('mem_lastname');
		$this->data['header'] = $this->template->getHeader(base_url());
		// $this->data['footer'] = $this->template->getFooter(base_url());
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */