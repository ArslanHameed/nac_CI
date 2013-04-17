<?php	
class Site_model extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();
    }
	
	function get_data($table_name){
		$this->db->where('user_type','user');
		$this->db->where('user_id',$this->get_user_id());
		$this->db->order_by('id','ASC');
		
        $query = $this->db->get($table_name);
        return $query->result();
	}
	
	function get_category($table_name){
        $query = $this->db->get($table_name);
        return $query->result();
	}
	
	function fetch_data($id,$table_name){
		$this->db->where('id',$id);
		$this->db->where('user_type','user');
		$this->db->where('user_id',$this->get_user_id());
        $query = $this->db->get($table_name);
        return $query->result();
	}
	
	function fetch_all_data($id,$table_name){
		$this->db->where('id',$id);
        $query = $this->db->get($table_name);
        return $query->result();
	}
	
	function update($id,$table_name,$data_input)
	{
		$this->db->where('id',$id);
		$query = $this->db->update($table_name,$data_input);
		
	}
	function login() 
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$sql = "SELECT * FROM ".TBL_USERS_LOGIN.", ".TBL_REGISTER." WHERE ".TBL_USERS_LOGIN.".username = '$username' AND ".TBL_USERS_LOGIN.".password = '$password' AND ".TBL_USERS_LOGIN.".user_type = 'user' AND ".TBL_REGISTER.".user_status='1'";
		$query  = $this->db->query($sql);	
		$result = $query->result();
		return $result;
	}
	
	function set_session($users){	
		if (!empty ($users)) {
			
			foreach ($users as $user){
				$this->session->set_userdata ('userID', $user->id);
				$this->session->set_userdata ('userName', $user->username);
				$this->session->set_userdata ('userType', $user->user_type);
			}
		}
	}
	function logout(){
		$this->session->unset_userdata('userID');
		$this->session->unset_userdata('userName');
		$this->session->unset_userdata('userType');
		redirect(base_url().'site/login');
	}
	
	function user_register_insert(){
		$rand = md5(uniqid(rand()));
		$phone_no = $_POST['property_phone'];
		$formatted_number = preg_replace("/^(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $phone_no);
		$fax_no = $_POST['property_fax'];
		$formatted_fax = preg_replace("/^(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $fax_no);
		//$password=$this->input->post('password');
//		 $encrypt_pass = base64_encode($password);
		$data= array(
		'lastname' 				=> $this->input->post('lastname'),
		'firstname' 			=> $this->input->post('firstname'),
		'address' 				=> $this->input->post('property_address'),
		'city' 					=> $this->input->post('property_city'),
		'state' 				=> $this->input->post('state'),
		'zip' 					=> $this->input->post('zip'),
		'phone' 				=> $formatted_number,
		'fax' 					=> $formatted_fax,
		'property_name' 		=> $this->input->post('property_name'),
		'email' 				=> $this->input->post('email'),
		'password' 				=> $this->input->post('password'),
		'company' 				=> $this->input->post('manage_company'),
		'regional_manager' 		=> $this->input->post('regional_manager'),
		'no_of_units' 			=> $this->input->post('no_of_units'),
		'no_of_newsletters' 	=> $this->input->post('no_of_newsletters'),
		'newsletter_type' 		=> $this->input->post('newsletters_type'),
		'user_type' 			=> 'user',
		'verif_id' 				=> $rand,
		'user_status' 			=> 0
		);
		$query=$this->db->insert(TBL_USERS,$data);
	}
}
?>