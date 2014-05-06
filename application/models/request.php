<?php
//class developed by Ali Nazari[ali_nazari7092@yahoo.com] Soroosh Ghaffari[s.ghaffari@gmail.com]
class Request extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}//End of __construct()
	public function get_user_open_requests($uid) 
	//OUTPUT: (num_rows() > 0): $array[i][RID, DID, status, designer_name] else false
	{
		$names = array('c');
		$this->db->select('RID , request.DID , status , name as designer_name');
		$this->db->from('request');
		$this->db->join('designer','designer.DID = request.DID');
		$this->db->where('UID',$uid);
		$this->db->where_not_in('status', $names);
		$query = $this->db->get();
		if($query->num_rows() == 0)
			return false;
		return $query->result_array();
	}//End of get_user_open_request()
	public function get_request_products($rid)
	//OUTPUT: (num_rows() > 0): $array[i][productID,preview,filename] else false
	{
		$this->db->select('product_ID , preview , file_name , RID');
		$this->db->from('product');
		$this->db->where('RID',$rid);
		$query = $this->db->get();
		if($query->num_rows() == 0)
			return false;
		return $query->result_array();
	}
}