<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Admissioned extends CI_Controller
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
		$data['tblName']='placed_st';
		$records=$this->MyModel->get_all($data);
		$data=null;
		if($records->num_rows()>0)
		{
			$temp="";
				foreach($records->result() as $c)
				{
					$temp.='<tr>';
					
					
					$data=null;
					$data['where']=array('st_id'=>$c->st_id);
					$data['tblName']='stu_details';
					$var=$this->MyModel->get_where($data)->result()[0];
					$temp.='<td>'.$var->st_fname.' '.$var->st_lname.'</td>';
					$data=null;
					$data['where']=array('u_id'=>$c->uni_id);
					$data['tblName']='uni_details';
					$temp.='<td>'.$this->MyModel->get_where($data)->result()[0]->u_name.'</td>';
					
					
					
					
					$temp.='</tr>';
				}
				$data['rows']=$temp;
		}
		 else{
			$data['rows']=null; 
		 }
		$this->load->view('Admissioned',$data);
	}
		function search()
		{
		$fname=$this->input->post("name");
		$query="select * from stu_details where CONCAT(REPLACE(st_fname,' ',''),REPLACE(st_lname,' ','')) like '%".str_replace(' ','',$fname)."%' or CONCAT(REPLACE(st_lname,' ',''),REPLACE(st_fname,' ','')) like '%".str_replace(' ','',$fname)."%'";
		$records=$this->MyModel->customSelect($query);
		if($records->num_rows()>0)
		{
				$temp="";
				foreach($records->result() as $r)
				{
					$data=null;
					$data['where']=array('st_id'=>$r->st_id);
					$data['tblName']='placed_st';
					$stu=$this->MyModel->get_where($data);
					if($stu->num_rows()>0)
					{
							foreach($stu->result() as $s)
							{
									$data=null;
									$data['where']=array('u_id'=>$s->uni_id);
									$data['tblName']='uni_details';
									$uni=$this->MyModel->get_where($data)->result()[0]->u_name;
									
										$temp.='<tr><td>'.$r->st_fname.' '.$r->st_lname.'</td><td>'.$uni.'</td></tr>';
													
							}
					}
				
				}
				if($temp!=''){
					echo $temp;
					
				}
				else
		{
				echo 'ZERO';
		}
		}
		else
		{
				echo 'ZERO';
		}
	}
	}
	
	
  
  ?>
