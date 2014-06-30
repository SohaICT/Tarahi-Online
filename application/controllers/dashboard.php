<?php
class dashboard extends CI_Controller
{
	var $uid;
	var $email;
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->email = $this->session->userdata('email');
		$this->uid = $this->session->userdata('uid');
	}
	public function test_session()
	{
		$this->load->library('session');
		$this->session->set_userdata('uid',2);
		$this->session->set_userdata('email','javati@jevad.ir');
	} 
	public function index($error = false)
	{
		$this->load->model('user');
		$this->load->model('designer');
		$this->load->model('request');
		$data['user'] = $this->user->get_account_info($this->uid,'u');
		$data['user']['turn_over'] = $this->user->monthly_turn_over($this->uid);
		$data['request'] = $this->request->get_user_open_requests($this->uid);
		$data['designer'] = $this->designer->get_designer_list();
		$data['information'] = $this->user->get_information($this->uid);
		if($error)
		{
			if(isset($error['user_edit_error']))
				$data['user_edit_error'] = $error['user_edit_error'];
		}
		$this->load->view('dashboard',$data);		
	}
	public function user_edit()
	{
		$this->load->library('form_validation');
		$this->lang->load('form_validation','fa');
		$this->form_validation->set_rules('name','نام','required');
		$this->form_validation->set_rules('mobile','موبایل','required');
		$this->form_validation->set_rules('password','پسورد','callback_passcheck');
		$this->form_validation->set_rules('new_password','پسورد جدید','max_lentgh[20]|min_lenght[6]');
		$this->form_validation->set_rules('new_password_confirm','تایید پسورد جدید','matches[new_password]');
		if($this->form_validation->run() == false)
		{
			$error['user_edit_error']=validation_errors()?validation_errors():null;
			$this->index($error);		
		}
		else
		{
			$data['name'] = $this->input->post('name');
			$data['mobile'] = $this->input->post('mobile');
			$data['password'] = $this->input->post('new_password_confirm');
			$this->load->model('user');
			$this->user->edit_user($data,$this->uid);
			$this->index();	
		}		
	}
	public function passcheck($password)
	{
		if($password == false)
			return true;
		$this->load->model('user');
		if($this->user->login_permision($this->email,$password))
			return true;
		$this->form_validation->set_message('passcheck', 'پسورد غلط میباشد');
			return false;
	}
	public function add_request()
	{
		$this->load->library('form_validation');
		$this->lang->load('form_validation','fa');
		$this->form_validation->set_rules();
	}
}