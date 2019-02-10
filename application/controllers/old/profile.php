<?php
class profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url','html'));
		$this->load->library('session');
		$this->load->database();
		$this->load->model('user_model');
	}
	
	function index()
	{
		$details = $this->user_model->get_user_by_id($this->session->userdata('user_details'));
		$data['uname'] = $details[0]->u_name;
		$data['uemail'] = $details[0]->u_email;
		$this->load->view('profile_view', $data);
	}
}