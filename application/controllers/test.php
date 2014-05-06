<?php
class Test extends CI_Controller
{
	public function index()
	{
		$this->load->model('request');
		$data=$request->get_user_open_request(1);
	}
}