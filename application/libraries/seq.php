<?php
/*
* Class developed by S.Ghaffari[ghaffari.sorosh@gmail.com]
*/
if (! defined('BASEPATH')) exit('No direct script access allowed');

class Seq 
{
	var $CI;

    public function __construct()
    {
    	$this->CI = &get_instance();
    	$this->CI->load->database();
    }//End of function __construct
    public function seq_current($sname)
    {
    	$this->CI->db->select('num');
    	$this->CI->db->from('seq');
    	$this->CI->db->where('seq_name', $sname);
    	$q = $this->CI->db->get();
    	if($q->num_rows() == 0)
    		return false;
   		$r = $q->row_array();
   		return $r['num'];
    }//End of function seq_current()
    public function seq_next($sname)
    {
    	$this->CI->db->select('num');
    	$this->CI->db->from('seq');
    	$q = $this->CI->db->get();
    	$this->CI->db->where('seq_name', $sname);
    	if($q->num_rows() == 0)
    		return false;
   		$r = $q->row_array();
   		$c = $r['num'];
   		$data['num'] = $c+1;
   		$this->CI->db->where('seq_name', $sname);
   		$this->CI->db->update('seq', $data);
   		return $c;
    }//End of function seq_current()
}//End of class Seq

/* End of file seq.php */