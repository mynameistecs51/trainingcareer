<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_authen  extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	public function insertRegiser($regisData)
	{
		$this->db->insert('member',$regisData);
	}

	public function getMember($email,$password)
	{
		$sql = "SELECT * FROM member WHERE mem_email='".$email."' AND  mem_pass = '".$password."' ";
		echo $sql;
		// $query = $this->db->query($sql)->result();
		// return  $query;
	}
}