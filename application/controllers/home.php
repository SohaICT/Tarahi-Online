<?php
//Class developed by S.Ghaffari [ghaffari.soroosh@gmail.com] and A.Nazari [ali_nazari9270@yahoo.com]
class Home extends CI_Controller
{
	public function index($errors = '')
	{
		$this->load->model('gallery');
		$data['gallery'] = $this->gallery->get_gallery(JNG_GALLERY , 1);
		//@todo: load home view	
	}//End of function index()
	public function login()
	{
		$this->load->library('form_validation');
		$this->lang->load('form_validation', 'fa');
		$this->form_validation->set_rules('login_email', 'ایمیل', 'required|max_length[12]|alpha_numeric');
		$this->form_validation->set_rules('login_password', 'گذرواژه', 'required|max_length[20]|callback_passcheck');
		if($this->form_validation->run() == false)
		{
			$error = validation_errors();
			$this->index($error);	
		}
		else
		{
			redirect('dashboard', 'refresh');
		}
	}//End of function login()
	public function passcheck($password, $email)
	{
		$email = $this->input->post('email');
		$this->load->model('user');
		$user = $this->user->login_permission($email, $password);
		if($user != false)
		{
			$this->create_session($user);
			return true;
		}
		$this->form_validation->set_message('passcheck', 'ایمیل یا گذرواژه وارد شده اشتباه است');
		return false;
	}//End of function passcheck()
	private function create_session($user)
	{
		$this->load->library('session');
		$this->session->set_userdata('UID', $user['UID']);
		$this->session->set_userdata('user_credit', $user['credit']);
		$this->session->set_userdata('user_email', $user['email']);
		$this->session->set_userdata('user_name' , $user['name']);
		$this->session->set_userdata('user_mobile' , $user['mobile']);
	}//End of function create_session()
	public function designer_form($did)
	{
		$this->load->model('designer');
		$this->load->model('gallery');
		$data['info'] = $this->designer->get_designer_info($did);
		$data['gallery'] = $this->gallery->get_gallery($data['info']['GID'],$flag=1);
		//echo $data['gallery']['photos']['PID'];
		$this->load->view('designer_page',$data);
	}
}//End of class home
/*
 * End of file home.php
 */