<?php

	class MyModel extends CI_Model {
		function __construct() {
			parent::__construct();
			$this->load->database();
		}
		public function get_where($data) {
			return $this->db->get_where($data['tblName'], $data['where']);
		}
		public function customSelect($query) {
			return $this->db->query($query);
		}
		public function get_all($tblName) {
			return $this->db->get($tblName);
		}
		public function insert($data) {
			return $this->db->insert($data['tblName'], $data['records']);
		}
		public function get_last_id() {
			return $this->db->insert_id();
		}
		public function update($data) {
			$this->db->where($data['where']);
			return $this->db->update($data['tblName'],$data['records']);
		}
		public function deleteRecord($data) {
			return $this->db->delete($data['tblName'],$data['where']);
		}
		public function start_transaction() {
			$this->db->trans_start();
		}
		public function complete_transaction() {
			$this->db->trans_complete();
		}
		public function status_transaction() {
			return $this->db->trans_status();
		}
	}

?>