<?php 

class Admin extends CI_Controller {
	
	private function load_model(){
		$this->load->model('admin_model');
	}
	
	private function islogin(){
		
		if($this->session->userdata('userName') && $this->session->userdata('userType'))
		{
			return true; 
		}
		
		return false;		
	}
	
	public function is_login(){
		if($this->islogin())
		{
			return true; 
		}
		
		redirect(base_url().'admin/login');	
	} 

	public function login(){

		$this->template->load('admin/templates/admin_template', 'admin/login');		
		
	}
	
	public function logout() {
		$this->load_model();
		$this->admin_model->logout();
	}
	
	function login_time_validation(){
		if(!($this->islogin())){
			$data['error_msg'] = "Your username or password is incorrect";
			$this->template->load('admin/templates/admin_template', 'admin/login',$data);
		}
		
	}
	
	public function check_login(){
		$this->load_model();
		$data['login'] = $this->admin_model->login();
		$data['user'] = $this->admin_model->set_session($data['login']);
		
		//
		$this->login_time_validation();
			
	}
	
	public function index()
	{
		$this->load->view('welcome_message');
	}
	
}