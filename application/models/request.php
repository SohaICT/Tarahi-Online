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
	}//End of function get_request_products()
	public function add_request($data)
	{
		$this->load->library('seq');
		$data['RID']=$this->seq->seq_next('reID');
		$data['build_date'] = standard_view();
		$this->db->insert('request', $data);
		return $data['RID'];
	}//End of function add_request()
	public function get_user_requests($uid)
	{
		$this->db->select('RID , request.DID , status , name as designer_name');
		$this->db->from('request');
		$this->db->join('designer','designer.DID = request.DID');
		$this->db->where('UID',$uid);
		$query = $this->db->get();
		if($query->num_rows() == 0)
			return false;
		return $query->result_array();
	}//End of function get_user_requests()
	public function get_request_info($rid)
	{
		$this->db->select('RID, map_file, build_date, status, UID, DID, lighting, miz, jazire, hajmi, arc_saghfi, side, gaz, fer, macro_fer, m_zarfshooii, colour, colour_type, name as designer_name');
		$this->db->from('request');
		$this->db->join('designer', 'designer.DID=request.DID');
		$this->db->where('RID', $rid);
		$query = $this->db->get();
		if($query->num_rows() == 0)
			return false;
		return $query->resutl_array();
	}//End of function get_request_info()
	public function get_request_messages($rid)
	{
		$this->db->select('*');
		$this->db->from('message');
		$this->db->where('RID', $rid);
		$q = $this->db->get();
		if($q->num_rows() == 0)
			return false;
		return $q->result_array();
	}//End of function get_request_messages()
	public function get_request_bills($rid)
	{
		$this->db->select('*');
		$this->db->from('bill');
		$this->db->join('bill-request', 'bill-request.BID = bill.BID');
		$this->db->where('RID' , $rid);
		$q = $this->db->get();
		if($q->num_rows() == 0)
			return false;
		return $q->result_array();
	}//End of function get_request_bills()
	public function add_request_message($msg, $rid, $flag="u", $attachment=false)
	{
		$data['content'] = $msg;
		if($flag=='u')
			$data['type'] = 'u';
		else
			$data['type'] = 'd';
		if($attachment)
			$data['attachment'] = $attachment;
		$data['date'] = standard_view();
		$data['RID']= $rid;
		$this->db->insert('message', $data);
	}//End of function add_request_message()
	public function add_request_bill($amount, $rid, $uid)
	{
		$this->load->library('seq');
		$data['BID'] = $this->seq->seq_next('blID');
		$data['date'] = standard_view();
		$data['amount'] = $amount;
		$data['status'] = 'u';
		$data['UID'] = $uid;
		$this->db->insert('bill', $data);
		$d2['BID'] = $data['BID'];
		$d2['RID'] = $data['RID'];
		$this->db->insert('bill-request', $d2);
		return $d2['BID'];
	}//End of function add_request_bill()
	public function pay_bill($bid)
	{
		$this->db->select('*');
		$this->db->from('bill');
		$this->db->where('BID', $bid);
		$q = $this->db->get();
		if($q->num_rows() == 0)
			return false;
		$bill = $q->row();
		$this->db->select('credit');
		$this->db->from('user');
		$this->db->where('UID', $bill->UID);
		$q = $this->db->get();
		if($q->num_rows() == 0)
			return false;
		$u = $q->row();
		if($u->credit < $bill->amount)
			return false;
		$d1['credit'] = $u->credit - $bill->amount;
		$this->db->where('UID', $bill->UID);
		$this->db->update('user', $d1);
		$d2['status'] = 'p';
		$this->db->where('BID', $bid);
		$this->db->update('bill',$d2);
		return true;
	}//End of function pay_bill()
	public function add_product($data)
	{
		$this->db->insert('product', $data);
	}//End of function add_product()
}//End of class request
/*
 * End of file request.php
 */