<?php
//class developed by Ali Nazari[ali_nazari7092@yahoo.com] Soroosh Ghaffari[s.ghaffari@gmail.com]
class Designer extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}//End of __construct()
	public function get_designer_list()
	//OUTPUT: (num_rows() > 0): $array[i][DID,price,name] else NULL
	{
		$this->db->select('DID , price , name');
		$this->db->from('designer');
		$query = $this->db->get();
		if($query->num_rows() == 0)
			return false;
		return $query->result_array();
	}
	public function get_designer_info($did)
	//OUTPUT: (num_rows() > 0): $array[i][DID,name,intro] else NULL
	{
		$this->db->select('DID , name , intro,GID');
		$this->db->from('designer');
		$this->db->where('DID',$did);
		$query = $this->db->get();
		if($query->num_rows() == 0)
			return false;
		//$data=$query->row_array();
		//echo $data['name'];
		return $query->row_array();
	}
}