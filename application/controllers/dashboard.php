<?php
class dashboard extends CI_Model
{
	var $uid;
	var $email;
	public function __construct()
	{
		parent::__construct();
		$this->email = $this->session->userdata('email');
		$this->uid = $this->session->userdata('uid');
	}
	public function test_session()
	{
		$this->load->library('session');
		$this->session->set_userdata('UID',2);
		$this->session->set_userdata('Email','javati@jevad.ir');
	} 
	public function index($error = false)
	{
		$this->load->model('user');
		$this->load->model('designer');
		$this->load->model('request');
		$user = $this->user->get_information($uid,'u');
		$user['turn_over'] = $this->user->monthly_turn_over($uid);
		$requests = $this->request->get_user_open_requests($uid);
		$designer = $this->desginer->get_designer_list();
		$information = $this->user->get_information($uid);
		$this->load->view('dashboard',array('user' => $user , 'request' => $request , 'designer' => $desginer , 'information' => $information,'error' => $error));		
	}
	public function user_edit()
	{
		$this->load->library('form_validation');
		$this->lang->load('form_validation','fa');
		$this->form_validation->set_rules('name','نام','required');
		$this->form_validation->set_rules('mobile','موبایل','required');
		$this->form_validation->set_rules('email','ایمیل','required');
		$this->form_validation->set_rules('password','پسورد','callback_passcheck');
		$this->form_validation->set_rules('new-password','پسورد جدید','max_lentgh[20]|min_lenght[6]');
		$this->form_validation->set_rules('new-password-confirmation','تایید پسورد جدید','matches[new-password]');
		if($this->form_validation->run() == false)
		{
			$errors=validation_errors()?validation_errors():null;
			$this->index($errors);		
		}
		else
		{
			$data['name'] = $this->input->post('name');
			$data['mobile'] = $this->input->post('mobile');
			$data['email'] = $this->input->post('email');
			$data['password'] = $this->input->post('password_confirm');
			$this->load->model('user');
			$this->user->edit_user($data);	
		}		
	}
	public function passcheck($password)
	{
		if($password == false)
			return true;
		$this->load->model('user');
		if($this->user->login_permision($this->input->post(),$password))
			return true;
		$this->form_validation->set_message('passcheck', 'پسورد غلط میباشد');
		return false;
	}
}