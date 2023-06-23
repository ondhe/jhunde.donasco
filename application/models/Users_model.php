<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	public function __construct(){
		parent::__construct();

	}

		function authenticate($email){
			$query = $this->db->query("SELECT * FROM `admin` where email='$email' " );
			if ($query->num_rows() > 0) {
				return $query->result();
			}
				return 0;

		}

		function fetch_all($table){

			$query = $this->db->query("SELECT * FROM `$table`   " );
			return $query->result();

		}
		function get_info($id){
			$query = $this->db->select('*')
								->from('admin')
								->where('id', $id)
								->get();

			return $query->result();

		}

		function fetch_info()
		{
			$query 	= $this->db->query("SELECT * FROM `admin_users` " );

			return $query->result();
		}

		// function fetch_site_info()
		// {
		// 	$query 	= $this->db->query("SELECT * FROM `website_info` " );

		// 	return $query->result();
		// }


		function insert_data($table,$data)
		{
			$this->db->insert($table, $data);
			$afftectedRows = $this->db->affected_rows();
	        if ($afftectedRows > 0) {
	            return TRUE;
	        } else {
	            return FALSE;
	        }
		}



		function set_update($table,$id,$data)
		{

			$this->db->set($data);
			$this->db->where('id', $id);
			$this->db->update($table);
			$afftectedRows = $this->db->affected_rows();
	        if ($afftectedRows > 0) {
	            return TRUE;
	        } else {
	            return FALSE;
	        }

		}



}

?>
