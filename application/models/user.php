<?php
//class developed by Ali Nazari[ali_nazari7092@yahoo.com] Soroosh Ghaffari[s.ghaffari@gmail.com]
class User extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function get_account_info($id,$flag='u')
	{
	if($flag == 'u')
		{
			$query = $this->db->query("select * from user where UID = \"$id\";");
				$row = $query->row();
      				return $row;	
		}
		if($flag == 'd')
		{
			$query = $this->db->query("select * from designer where DID = \"$id\";");
				$row = $query->row();
      				return $row;	
		}
	}
	public function login_permision($email , $password, $flag='u')
	{
		if($flag == 'u')
		{
			$query = $this->db->query("select * from user where email = \"$email\";");
			if($query->num_rows() > 0)
			{
				$row = $query->row();
				$this->load->library('encrypt');
				$p = $this->encrypt->decode($row->password);
      			if($p == $password)
      				return $row;
      			else 
      				return false;	
			}
		}
		if($flag == 'd')
		{
			$query = $this->db->query("select * from designer where email = \"$email\";");
			if($query->num_rows() > 0)
			{
				$row = $query->row();
				$this->load->library('encrypt');
				$p = $this->encrypt->decode($row->password);
      			if($p == $password)
      				return $row;
      			else 
      				return false;	
			}
		}
		return false;
	}
	//End of function Login_permision
	public function register($data , $flag)
	{
		if($flag == 'u')
		{
			$this->db->insert('user',$data);
		}
		if($flag == 'd')
		{
			$this->db->insert('designer',$data);
		}
	}
	//End of function register
	public function get_information($uid)
	{
		$query = $this->db->query("select user-information.IID,user-information.UID,information.content,information.title,information.date from information-user,information where user-information.UID = $uid and user-information.IID = information.IID and information.type = 's' and information.visible= 't'");
		if($query->num_rows() > 0)
			$data['public'] = $query->result_array();
		else
			$data['public']=false;
		$data['public-num'] = $query->num_rows();
		$query = $this->db->query("select content,title,date from information where type= 'p' and visible= 't'");
		if($query->num_rows() > 0 )
			$data['private'] = $query->result_array();
		else 
			$data['private'] = false;
		$data['private-num']=$query->num_rows();
		return $data;
	}
	//End of function get_information
	public function monthly_turn_over($uid)
	{
		$start = implode('-', array(jdate('Y'), jdate('m'), '01', '00', '00', '00') );
		$query="SELECT SUM(amount) as `turn_over` FROM bank_payment WHERE date > $start ;";
		$q = $this->db->query($query);
		return $q->turn_over;
	}
	
}