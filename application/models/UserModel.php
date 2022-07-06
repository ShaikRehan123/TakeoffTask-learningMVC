<?php
	class UserModel extends CI_Model {
		public function get_users(){
			$this->load->database();
			$query = $this->db->get('user');
			return $query->result_array();
		}
		public  function add_user($data){
			$this->load->database();
			$this->db->insert('user', $data);

		}
	}
?>
