<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Login_Model extends CI_Model {

        public $u_email;
        public $u_name;
        public $u_number;
		public $u_pwd;

        public function get($data)
        {
                $query = $this->db->get('user_details',$data['where']);
                return $query->result();
        }

        public function insert_entry()
        {
                $this->title    = $_POST['title']; // please read the below note
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->insert('entries', $this);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }

}