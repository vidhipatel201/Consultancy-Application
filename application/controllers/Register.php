<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Register extends CI_Controller
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
		$data['tblName']='country_name';
		$records=$this->MyModel->get_all($data);
		$data=null;
		$data['records']=$records->result();
		 $this->load->view('register',$data);
		 
	}
	
	function insert()
	{
			$fname=$this->input->post("fname");
			$lname=$this->input->post("lname");
			$phone=$this->input->post("number");
			$email=$this->input->post("email");
			$residence=$this->input->post("res");
			$dest_country=$this->input->post("dc");
			$cor=$this->input->post("cor");
			$edu=$this->input->post("education");
			$occ=$this->input->post("occ");
			$r1=$this->input->post("optionsRadios1");
			$r2=$this->input->post("optionsRadios2");
			$dob=$this->input->post("date");
			$text=$this->input->post("other");
			if($text=="")
			{
				if(isset($_POST['fall']))
				{
					$text="FALL";
					
				}
				else{
					$text="SPRING";
				}
			}
			
			
			$data['where']=array('st_contact'=>$phone);
			$data['tblName']='stu_details';
			$records=$this->MyModel->get_where($data);
			
			if($records->num_rows()>0)
		{
				$this->session->set_userdata('msg','error');
				$this->index();
		}
			else
			{
			$data['records']=array('st_fname'=>$fname,'st_lname'=>$lname,'st_contact'=>$phone,'st_email'=>$email,'st_address'=>$residence,'st_pr'=>$r1,'st_student'=>$r2,'st_destc'=>$dest_country,'st_cor'=>$cor,'st_quali'=>$edu,'st_occu'=>$occ,'st_dob'=>$dob,'st_intake'=>$text,'st_date_application'=>date("Y-m-d"));
			$data['tblName']='stu_details';
			
			$this->MyModel->insert($data);
						$this->session->set_userdata('msg','success');
						$this->index();
	}
  }
}
