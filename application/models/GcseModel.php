<?php 

/**
* 
*/
class GcseModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function getAllGcseResults(){
		$query = $this->db->get('tbl_gcse')->result();
		if(!empty($query)){
			return $query;
		}else{
			return false;
		}
	}
}