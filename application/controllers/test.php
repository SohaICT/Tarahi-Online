<?php
class Test extends CI_Controller
{
	public function index()
	{
		$this->load->model('request');
		$data=$this->request->get_user_open_requests(2);
		foreach ($data as $x)
		{
			echo $x['RID'];
			echo $x['DID'];
			echo $x['status'];
			echo $x['designer_name'];
		}
	}
	public function test1()
	{
		$this->load->model('request');
		$data=$this->request->get_request_products(10);
		foreach ($data as $x)
		{
			echo $x['product_ID'];
			echo $x['preview'];
			echo $x['file_name'];
		}
	}
}