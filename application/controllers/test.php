<?php
class Test extends CI_Controller
{
	public function index()
	{
		$this->load->model('designer');
		$data=$this->designer->get_designer_info(1);
		foreach ($data as $x)
		{
			echo $x['DID'];
			echo $x['name'];
			echo $x['intro'];
		}
	}
	public function insert()
	{
		$this->load->helper('date_helper');
		$this->load->model('gallery');
		$data['PID']=6;
		$data['title']='ax man';
		$data['note']='ina khooban';
		$data['file_name']='farogho tahsili';
		//$data['build_date']=standard_view(1);
		//$data['cover']='are cover';
		$this->gallery->set_cover_photo(6,5);
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