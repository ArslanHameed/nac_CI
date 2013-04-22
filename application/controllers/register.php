<?php 

class Register extends CI_Controller {
	
	private function load_model(){
		$this->load->model('site_model');
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
		
		redirect(base_url().'site/login');	
	} 

	public function login(){

		$this->template->load('site/templates/site_template', 'site/login');		
		
	}
	
	public function logout() {
		$this->load_model();
		$this->site_model->logout();
	}
	
	function login_time_validation(){
		if(!($this->islogin())){
			$data['error_msg'] = "Your username or password is incorrect";
			$this->template->load('site/templates/site_template', 'site/login',$data);
		}
		
	}
	
	public function check_login(){
		$this->load_model();
		$data['login'] = $this->site_model->login();
		$data['user'] = $this->site_model->set_session($data['login']);
		
		//
		$this->login_time_validation();
			
	}
	
	public function index()
	{
		$this->template->load('site/templates/site_template', 'site/index');
	}
	
	public function user_register()
	{
		$this->load_model();
		/*$session_id = $this->session->userdata('session_id');
		$data['temp_user_details'] = $this->site_model->get_temp_user_details($session_id);*/
		$this->template->load('site/templates/site_template', 'site/register_view');
	}
	
	public function personal_details_submitted($session_id = '')
	{
		$this->load_model();
		
		/*$this->session->set_userdata ('TITLE', $this->input->post('title'));
		$this->session->set_userdata('FIRSTNAME',$this->input->post('firstName'));
		$this->session->set_userdata('SURNAME',$this->input->post('surName'));
		$this->session->set_userdata('DAY',$this->input->post('day'));
		$this->session->set_userdata('MONTH',$this->input->post('month'));
		$this->session->set_userdata('YEAR',$this->input->post('year'));
		$this->session->set_userdata('PHONENUMBER',$this->input->post('phoneNumber'));
		$this->session->set_userdata('ALTPHONENUMBER',$this->input->post('altPhoneNumber'));
		$this->session->set_userdata('EMAILADDRESS',$this->input->post('emailAddress'));
		$this->session->set_userdata('NUMBER',$this->input->post('number'));
		$this->session->set_userdata('STREET',$this->input->post('street'));
		$this->session->set_userdata('SUBURB',$this->input->post('suburb'));
		$this->session->set_userdata('STATE',$this->input->post('state'));
		$this->session->set_userdata('POSTCODE',$this->input->post('postcode'));
		$this->session->set_userdata('COUNTRY',$this->input->post('country'));
		$this->session->set_userdata('POSITION',$this->input->post('position'));
		echo $this->session->userdata('TITLE');
		echo $this->session->userdata('FIRSTNAME');
		
		echo $this->session->userdata('SURNAME'); */
		
		/*$data_input = array(
		'title' 		=> $this->input->post('title'),
		'first_name' 	=> $this->input->post('firstName'),
		'sur_name' 		=> $this->input->post('surName'),
		'day' 			=> $this->input->post('day'),
		'month' 		=> $this->input->post('month'),
		'year' 			=> $this->input->post('year'),
		'phone_no' 		=> $this->input->post('phoneNumber'),
		'alt_phone_no' 	=> $this->input->post('altPhoneNumber'),
		'email' 		=> $this->input->post('emailAddress'),
		'number' 		=> $this->input->post('number'),
		'street' 		=> $this->input->post('street'),
		'suburb' 		=> $this->input->post('suburb'),
		'state' 		=> $this->input->post('state'),
		'postcode' 		=> $this->input->post('postcode'),
		'country' 		=> $this->input->post('country'),
		'position' 		=> $this->input->post('position'),
		);
		print_r($data_input);*/
		
		$session_id = $this->session->userdata('session_id');
		$data['temp_user_details'] = $this->site_model->get_temp_user_details($session_id);
		if(!empty($data['temp_user_details'])){
			$this->site_model->update_temp_personal($session_id);
			
		}else{
		
		$this->site_model->insert_temp_personal($session_id);
		
		}
		return true;
	}
	
	public function qualification_details_submitted()
	{
		$this->load_model();
		/*$this->session->set_userdata('COUNTRYNURSE',$this->input->post('countryNurse'));
		$this->session->set_userdata('COUNTRYTRAINING',$this->input->post('countryTraining'));
		$this->session->set_userdata('EXPERIENCE',$this->input->post('experience'));
		$this->session->set_userdata('PREFLOCATION',$this->input->post('prefLocation'));*/
		$session_id = $this->session->userdata('session_id');
		$this->site_model->insert_temp_qualification($session_id);
		return true;
	}
	
	public function clinical_details_submitted()
	{
		$this->load_model();
		
		$session_id = $this->session->userdata('session_id');
		
		$this->site_model->insert_temp_clinical($session_id);
		
		$data['temp_user_details'] = $this->site_model->get_temp_user_details($session_id);
		$this->load->view('site/forth_tab_view',$data);
	}
	
	public function thanks_register()
	{
		
		$this->template->load('site/templates/site_template', 'site/thanks_register_view');
	}
	
	public function registration_completed(){
		$this->load_model();
		$session_id = $this->session->userdata('session_id');
		$data['temp_user_details'] = $this->site_model->get_temp_user_details($session_id);
		$user_detail = $data['temp_user_details'];
		$this->site_model->user_register_insert($user_detail);
		$last_user_id = $this->db->insert_id();
		$user_detail  = $this->site_model->get_register_user_details($last_user_id);
		foreach($user_detail as $user){
			 $rand_id = $user->random;
			 $email = $user->email;
			}
			
			
		$this->get_verif_id($rand_id, $email);
		
		
		}
		
		//email to user for account varification
		public function get_verif_id($rand_id, $email){
		$this->load_model();
		$this->load->library('email');
		
		$config['charset'] = 'utf-8';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';
		
		$this->email->initialize($config);
		
		$this->email->from('nac@info', 'Nurse at Call');
		$this->email->to($email); 

		$this->email->subject('Verify Account');
		$this->email->message("Please open this link in new tab to activate your account:
		".base_url()."site/verification_account/$rand_id");	
		
		if($this->email->send()){
			$data['user_msg']="Please check your emails for activation of your account";
		}else{
			show_error($this->email->print_debugger());
		}
		$this->template->load('site/templates/site_template', 'site/thanks_register');
		
		}
		
		public function user_login(){
			$this->load_model();
			$this->load->view('site/login');
		}
		
		
		public function verification_account($rand){
		$this->load_model();
		$data['get_users']=$this->site_model->get_user('register');
		foreach($data['get_users'] as $user)
		{
			$random_id=$user->verif_id;
			$email  = $this->email;
		}
		

			
				if($random_id===$rand){
					$this->load->library('email');
		

					$config['charset'] = 'utf-8';
					$config['wordwrap'] = TRUE;
					$config['mailtype'] = 'html';
					
					$this->email->initialize($config);
					
					$this->email->from('ac_verify@info', 'Nurse at Call');
					$this->email->to('admin@info'); 
					
					$this->email->subject('Verify Account');
					
					$this->email->message("account activation:
					".base_url()."site/active_account/$random");	
					
					if($this->email->send()){
						$data['user_msg'] = "your account is verified so please wait for admin approval to login in our system" ;
					}
	

				else{
				$data['msg']="Sorry your account is not verified ";
				}
			}
		}
			
		public function active_account($rand){
			$this->load_model();
			$data['get_user_email']=$this->site_model->account_activation($rand);
			$password =  uniqid();
		foreach($data['get_user_email'] as $user)
		{
			$email= $user->email;
		}
			
			$this->load->library('email');
		
					$config['charset'] = 'utf-8';
					$config['wordwrap'] = TRUE;
					$config['mailtype'] = 'html';
					
					$this->email->initialize($config);
					
					$this->email->from('admin@info', 'Nurse at Call');
					$this->email->to($email); 
					
					$this->email->subject('Account Varification Completed');
					
					$this->email->message("Your Account has been activated.:
					".base_url()."site/index");	
		
					$this->email->send();
				
			}	
			
				
}