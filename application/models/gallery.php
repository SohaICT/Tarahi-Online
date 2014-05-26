<?php
//class developed by Ali Nazari[ali_nazari7092@yahoo.com] Soroosh Ghaffari[s.ghaffari@gmail.com]
class Gallery extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}//End of __construct()
	public function add_gallery($data)
	//insert into the table
	{
		$this->db->insert('gallery',$data);
	}//End of add_gallery()
	public function add_photo($data,$gid)
	//insert pictures into tables
	{
		$data['GID']=$gid;
		$this->db->insert('picture',$data);
	}//End of add_photo()
	public function set_cover_photo($pid,$gid)
	{
		$data['cover']=$pid;
		$this->db->where('GID', $gid);
		$this->db->update('gallery',$data);
	}//End of functin set_cover_photo()
	public function get_gallery($gid,$flag=1)
	{
		$this->db->select('*');
		$this->db->from('gallery');
		$this->db->where('GID',$gid);
		$query = $this->db->get();
		if($query->num_rows() == 0 )
			return false;
		$data['gallery']=$query->reslut_array();
		if($flag != 0)
		{
			$this->db->select('*');
			$this->db->from('picture');
			$this->db->where('GID',$gid);
			$query1 = $this->db->get();
			if($query1->num_rows() != 0)
				$data['photos']=$query1->reslut_array();
			else
				$data['photos']=NULL;
		}
		return $data;
	}//End of function get_gallery
}