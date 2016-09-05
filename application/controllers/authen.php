<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authen extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mdl_authen','',TRUE);
		$now = new DateTime(null, new DateTimeZone('Asia/Bangkok'));
		$this->dt_now = $now->format('Y-m-d H:i:s');
	}

	function checkLogin(){
		// echo md5($this->input->post('password'));
		// $this->load->library('form_validation');
		$this->form_validation->set_rules('loginEmail','email','trim|required|xss_clean');
		$this->form_validation->set_rules('loginPassword','Password','trim|required|xss_clean|callback_check_database');

		if($this->form_validation->run() === FALSE){
			redirect('dashboard/','refresh');
		}elseif($this->session->userdata('session_data')){
			$session_data = $this->session->userdata('session_data');
			//print_r($session_data);
			// redirect('home','refresh');
			switch ($session_data['m_type']) {
				case '1':
				echo "1",'admin';
				break;
				case '2':
				echo "2",'member';
				break;
				default:
				redirect('dashboard','refresh');
				break;
			}
		}else{
			//redirect('home/login','refresh');
			//redirect(site_url('home/login',$error="NO"));
			$massage = " เข้าสู่ระบบผิดพลาด !!!";
			$url ="#login";
			$this->alert($massage, $url);
			exit();
		}
	}

	function check_database(){
		//field input email
		$email = $this->input->post('loginEmail');
		$password = md5($this->input->post('loginPassword'));

		$result = $this->mdl_authen->getMember($email,$password);

		if($result){
			// $sess_array = array();
			foreach ($result as $row_result) {
				$sess_array = array(
					'id_member' =>$row_result->id_member,
					'mem_email' => $row_result->mem_email,
					'mem_pass' => $row_result->mem_pass,
					'mem_name' => $row_result->mem_name,
					'mem_lastName' => $row_result->mem_lastName,
					'mem_tel' => $row_result->mem_tel,
					'mem_type' => $row_result->mem_type,
					);
				$this->session->set_userdata('session_data',$sess_array);
			}
		}else{
			$this->form_validation->set_message('check_database','ลงชื่อเข้าใช้ระบบผิดพลาด');
		}
	}

	public function regis()
	{

		$regisData = array(
			'id_member' => '',
			'mem_email' =>  $this->input->post('regisEmail'),
			'mem_pass' => md5($this->input->post('regisPassword')),
			'mem_name' => $this->input->post('regisName'),
			'mem_lastName' => $this->input->post('regisLasname'),
			'mem_tel' => $this->input->post('regisPhone'),
			'mem_type' => '2', //2 = status to member
			'mem_create' => $this->dt_now,
			);
		$this->mdl_authen->insertRegiser($regisData);

		$massage = " สมัครสมาชิกเสร็จเรียบร้อย";
		$url = "dashboard/";
		$this->alert($massage, $url);
		exit();
	}

	public function alert($massage, $url)
	{
		echo "<meta charset='UTF-8'>
		<SCRIPT LANGUAGE='JavaScript'>
			window.alert('$massage')
			window.location.href='".site_url($url)."';
		</SCRIPT>";
	}

}

/* End of file authen.php */
/* Location: ./application/controllers/authen.php */