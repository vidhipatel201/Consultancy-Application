<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Enquiry extends CI_Controller
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
		 $this->load->view('enquiry');
	}
	function insert()
	{
			$fname=$this->input->post("fname");
			$lname=$this->input->post("lname");
			$phone=$this->input->post("number");
			$email=$this->input->post("email");
			$residence=$this->input->post("res");
			$r1=$this->input->post("optionsRadios1");
			$r2=$this->input->post("optionsRadios2");
			$dob=$this->input->post("date");
			$purpose=$this->input->post("purpose");
			$reference=$this->input->post("ref");
			$data['where']=array('st_phone'=>$phone);
			$data['tblName']='st_inquiry';
			$records=$this->MyModel->get_where($data);
			if($records->num_rows()>0)
		{
				$this->session->set_userdata('msg','error');
				$this->index();
		}
			else
			{
			$data['records']=array('st_fname'=>$fname,'st_lname'=>$lname,'st_phone'=>$phone,'st_email'=>$email,'st_dob'=>$dob,'st_addr'=>$residence,'st_pr'=>$r1,'st_student'=>$r2,'st_purpose_pte'=>$purpose,'st_reference'=>$reference);
			$data['tblName']='st_inquiry';
			
			$this->MyModel->insert($data);
						$this->session->set_userdata('msg','success');
						$this->index();
			}
	}
 }
