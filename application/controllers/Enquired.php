<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Enquired extends CI_Controller
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
		$data['tblName']='st_inquiry';
		$records=$this->MyModel->get_all($data);
		$data=null;
		if($records->num_rows()>0)
		{
			$temp="";
				foreach($records->result() as $c)
				{
					$temp.='<tr>';
					$temp.='<td>'.$c->st_fname.' '. $c->st_lname.'</td>';
					$temp.='<td>'.$c->st_phone.'</td>';
					$temp.='<td>'.$c->st_email.'</td>';
					$temp.='<td>'.$c->st_addr.'</td>';
					$temp.='<td>'.$c->st_dob.'</td>';
					$temp.='<td>'.$c->st_purpose_pte.'</td>';
					$temp.='<td>'.$c->st_reference.'</td>';
					$temp.='<td>'.(($c->st_pr==0)?"NO":"YES").'</td>';
					$temp.='<td>'.(($c->st_student==0)?"NO":"YES").'</td>';
					$temp.='<td><button type="button" class="btn btn-danger" onClick="del('.$c->inquiry_id.')">Delete</button></td>';
					$temp.='</tr>';
				}
			$data['rows']=$temp;
		}
		else{
			$data['rows']=null;
		}
			$this->load->view('enquired',$data);	
		}

			function deleteEnq()
			{
				$id=$this->input->post('id');
				$data['where']=array('inquiry_id'=>$id);
				$data['tblName']='st_inquiry';
				if($this->MyModel->deleteRecord($data))
				{
						echo 'success';
				}
				else{
					echo 'error';
				}
			}
	}
	
  ?>
