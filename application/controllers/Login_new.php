<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Login_new extends CI_Controller
{
 // protected $data = array();
  function __construct()
  {
    parent::__construct();
	$this->load->model('MyModel');
	
	
  }
	function index()
	{
		 $this->load->view('login');
	}
	function login()
	{
		$uname=$this->input->post("email");
		$pwd=$this->input->post("password");
		$data['where']=array('u_email'=>$uname,'u_pwd'=>$pwd);
		$data['tblName']='user_details';
		$records=$this->MyModel->get_where($data);
		if($records->num_rows()>0)
		{
			$this->session->set_userdata('logged',$uname);
			redirect(base_url().'index.php/Logged');
			
			
		}
	else{
		
		$this->index();
	}}
	function logout()
	{
		$this->session->sess_destroy();
		$this->index();
	}
 }
 ?>
