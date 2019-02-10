<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Logged extends CI_Controller
{
 // protected $data = array();
  function __construct()
  {
    parent::__construct();
	$this->load->model('MyModel');
	$this->load->library('email');
	if($this->session->userdata('logged'))
	{ }
else
{
		redirect(base_url().'index.php/Login_new');
}
  }
	function index()
	{
		$data['tblName']='stu_details';
		$records=$this->MyModel->get_all($data);
		$data=null;
		if($records->num_rows()>0)
		{
			$temp="";
				foreach($records->result() as $c)
				{
					$temp.='<tr>';
					$temp.='<td>'.$c->st_fname.' '. $c->st_lname.'</td>';
					$temp.='<td>'.$c->st_contact.'</td>';
					$temp.='<td>'.$c->st_email.'</td>';
					$temp.='<td>'.$c->st_address.'</td>';
					$temp.='<td>'.$c->st_dob.'</td>';
					$data=null;
					$data['where']=array('c_id'=>$c->st_cor);
					$data['tblName']='country_name';
					$temp.='<td>'.$this->MyModel->get_where($data)->result()[0]->c_name.'</td>';
					$data=null;
					$data['where']=array('c_id'=>$c->st_destc);
					$data['tblName']='country_name';
					$temp.='<td>'.$this->MyModel->get_where($data)->result()[0]->c_name.'</td>';
					
					/*$temp.='<td>'.$c->st_quali.'</td>'; */
					$temp.='<td><button type="button" class="btn btn-danger" onClick="del('.$c->st_id.')">Delete</button></td>';
					$temp.='<td><a href="'.base_url().'/index.php/Logged/confirm?u_id='.$c->st_id.'"<button type="button" class="btn btn-info">Confirm</button></a></td>';
					
					
					
					
					$temp.='</tr>';
				}
				$data['rows']=$temp;
		}
		 else{
			$data['rows']=null;
		}
		$this->load->view('logged',$data);
	}
	function deleteEnq()
			{
				$id=$this->input->post('id');
				$data['where']=array('st_id'=>$id);
				$data['tblName']='stu_details';
				if($this->MyModel->deleteRecord($data))
				{
						echo 'success';
				}
				else{
					echo 'error';
				}
			
			}
  
	function Confirm()
	{	
		$data['tblName']='stu_details';
		$data['where']=array('st_id'=>$this->input->get('u_id'));
		$record=$this->MyModel->get_where($data);
		
		$data=null;
		$data['tblName']='uni_details';
		$records=$this->MyModel->get_all($data);
		$data=null;
		$data['record']=$record->result()[0];
		$data['records']=$records->result();
		 $this->load->view('place',$data);
		
	
	}
		function send()
		{
				$id=$this->input->post('id');
				$id2=$this->input->post('u_id');
				$data['records']=array('st_id'=>$id,'uni_id'=>$id2);
				$data['tblName']='placed_st';
			
			$this->MyModel->insert($data);
		/*	$data=null;
			$data['tblName']='stu_details';
			$data['where']=array('st_id'=>$id);
			$rec1=$this->MyModel->get_where($data);
			$data=null;
			$data['tblName']='uni_details';
			$data['where']=array('u_id'=>$id2);
			$rec=$this->MyModel->get_where($data);
			//$this->send_mail($rec->result()[0]->u_name,$rec1->result()[0]->st_email);
			
			
			*/
			echo 'success';
			
			
		}		
	/*	public function send_mail($uni,$stu)
    {
 
			
			$config['protocol'] = 'sendmail';
			$config['useragent']= 'CodeIgniter';
            $config['smtp_host'] = 'localhost';
            $config['smtp_port'] = '25';
            $config['smtp_user'] = 'ldrptaxi@gmail.com';
            $config['smtp_pass'] = 'ldrptaxi@123';
            $config['mailtype'] = 'html';
            $config['charset'] = 'utf-8';
            $config['wordwrap'] = TRUE;
            $config['newline'] = "\r\n"; //use double quotes
			$this->load->library('email');
			$this->email->initialize($config);   
			$this->email->from('ldrptaxi@gmail.com');
			$this->email->to($stu);
			$this->email->subject('message sent');
			$this->email->message($uni);
			$this->email->send();
			 
    show_error($this->email->print_debugger()); 
  
  
		}
      */  
    }
 	
?>