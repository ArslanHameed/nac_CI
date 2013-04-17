<?php 

class Site extends CI_Controller {
	
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
		$this->template->load('site/templates/site_template', 'site/register');
	}
	
	public function personal_details_submitted()
	{
		
		$this->session->set_userdata ('TITLE', $this->input->post('title'));
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
		
	}
	
	public function qualification_details_submitted()
	{
		$this->session->set_userdata('COUNTRYNURSE',$this->input->post('countryNurse'));
		$this->session->set_userdata('COUNTRYTRAINING',$this->input->post('countryTraining'));
		$this->session->set_userdata('EXPERIENCE',$this->input->post('experience'));
		$this->session->set_userdata('PREFLOCATION',$this->input->post('prefLocation'));
		
	}
	
	public function clinical_details_submitted()
	{
		
		$this->session->set_userdata('CANNULATION',$this->input->post('cannulation'));
		$this->session->set_userdata('PAEDNEON',$this->input->post('paediatricsNeonatal'));
		$this->session->set_userdata('TRIAGE',$this->input->post('triage'));
		$this->session->set_userdata('CARDIAC',$this->input->post('cardiac'));
		$this->session->set_userdata('VENEPUNCTURE',$this->input->post('venepuncture'));
		$this->session->set_userdata('COMMUNITYNURSING',$this->input->post('communityNursing'));
		$this->session->set_userdata('SUTERING',$this->input->post('sutering'));
		$this->session->set_userdata('OPERATINGTHEATRE',$this->input->post('operatingTheatre'));
		$this->session->set_userdata('VENTILATORCOMPETENT',$this->input->post('ventilatorCompetent'));
		$this->session->set_userdata('AGEDCARE',$this->input->post('agedCare'));
		$this->session->set_userdata('ADVCARDLIFESUPPORT',$this->input->post('advCardLifeSupport'));
		$this->session->set_userdata('MIDWIFERY',$this->input->post('midwifery'));
		$this->session->set_userdata('DEFIBRILLATION',$this->input->post('defibrillation'));
		$this->session->set_userdata('MEDICAL',$this->input->post('medical'));
		$this->session->set_userdata('SCRUB',$this->input->post('scrub'));
		$this->session->set_userdata('MENTALHEALTH',$this->input->post('mentalHealth'));
		$this->session->set_userdata('OTHER',$this->input->post('other'));
		$this->session->set_userdata('X_RAYS',$this->input->post('x-rays'));
		$this->session->set_userdata('OPTION1',$this->input->post('option1'));
		$this->session->set_userdata('OPTION2',$this->input->post('option2'));
		$this->session->set_userdata('OPTION3',$this->input->post('option3'));
		$this->session->set_userdata('DELIVERYSUITE',$this->input->post('deliverySuite'));
		$this->session->set_userdata('INTENSIVECARE',$this->input->post('intensiveCare'));
		$this->session->set_userdata('ACCEMERGENCY',$this->input->post('accEmergency'));
		
		
	}
	
	public function thanks_register()
	{
		$this->template->load('site/templates/site_template', 'site/thanks_register');
	}
	
	public function new_user_register(){
		$this->load_model();
		$this->load->library('email');
		
		$config['charset'] = 'utf-8';
		$config['wordwrap'] = TRUE;
		$config['mailtype'] = 'html';
		
		$this->email->initialize($config);


		$this->site_model->user_register_insert();
		$userid=$this->db->insert_id();
						 
		$data['get_users']=$this->site_model->get_user(TBL_USERS);
		foreach($data['get_users'] as $user)
		{
			$email= $user->email;
			$random= $user->verif_id;
			$firstname = $uesr->firstname;
			$lastname = $uesr->lastname;
			$phone = $uesr->phone;
			$property_name = $user->property_name;
			$property_address = $user->address;
			$city = $user->city;
			$state = $user->state;
			$zip = $user->zip;
			$fax =$user->fax;
			$property_contact =$user->contact_person;
			$property_email = $user->email;
			$password = $user->password;
			$Management_company = $user->company;
		}
		
		$this->email->from(FROM_NO_REPLY, 'NAC');
		$this->email->to($email);  
	
		
		$this->email->subject('Account Instructions');
		$this->email->message("An Account has been created:<br />
		Please allow One Business Day for your account to be activated");	
		
		if($this->email->send()){
			$data['user_msg']="Please check your email to proceed";
			$this->session->set_userdata ('register_date',date('Y-m-d'));
		}
		else{
			show_error($this->email->print_debugger());
			}	
			
			$message .=  "<br> <a href='". base_url() ."admin/users_list'>Click here</a> to activate account.";
			
		
	//	$this->email->mailtype("html");
		$this->email->from(FROM_NO_REPLY, 'NAC');
		$this->email->to(FOR_REGISTER); 
		$this->email->cc("nac@123.com");
		//staff@zerflin.com
		
		$this->email->subject($lastname ." ". $firstname .' has submitted a request for Registration Approval');
		$this->email->message($message);
		if($this->email->send()){
			true;
		}
		else{
			show_error($this->email->print_debugger());
			}
		//$data['user_msg']="Please check your email for verification of your account and then you can login";
		$this->template->load('site/templates/site_template', 'site/login',$data);		
		
		}
}