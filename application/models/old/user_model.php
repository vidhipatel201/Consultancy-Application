<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model
{
	function __construct()
    {
        parent::__construct();
		$this->load->database();
    }
	
	function get_user($email, $pwd)
	{
		$this->db->where('u_email', $email);
		$this->db->where('u_pwd', $pwd);
        $query = $this->db->get('user_details');
		return $query->result();
	}
	
	// get user
	function get_user_by_id($id)
	{
		$this->db->where('u_name', $id);
        $query = $this->db->get('user_details');
		return $query->result();
	}
	
	// insert
	function insert_user($data)
    {
		return $this->db->insert('user_details', $data);
	}
}?>