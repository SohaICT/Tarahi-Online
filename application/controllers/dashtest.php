<?php
class Dashtest extends CI_Controller
{
	public function index()
	{
		$data['information']=array('private-num'=>0, 'public-num'=>0, 'private'=>false,'public'=>false);
		$this->load->view('dashboard', $data);
	}
}//End of dashtest