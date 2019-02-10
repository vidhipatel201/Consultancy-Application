<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class New_user extends CI_Controller
{
 // protected $data = array();
  function __construct()
  {
    parent::__construct();
	$this->load->model('MyModel');
	if($this->session->userdata('logged'))
	{ }
else
{
		redirect(base_url().'index.php/Login_new');
}
  }
	function index()
	{
		
		 $this->load->view('new_user');
		 
	}
	
	function insert()
	{
			$fname=$this->input->post("fname");
			$lname=$this->input->post("password");
			$email=$this->input->post("email");
			$phone=$this->input->post("phone");
			
			
			$data['where']=array('u_number'=>$phone);
			$data['tblName']='user_details';
			$records=$this->MyModel->get_where($data);
			
			if($records->num_rows()>0)
		{
				$this->session->set_userdata('msg','error');
				$this->index();
		}
			else
			{
			$data['records']=array('u_name'=>$fname,'u_pwd'=>$lname,'u_email'=>$email,'u_number'=>$phone);
			$data['tblName']='user_details';
			
			$this->MyModel->insert($data);
						$this->session->set_userdata('msg','success');
						$this->index();
	}
  }
}
