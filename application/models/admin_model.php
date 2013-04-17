<?php	
class Admin_model extends CI_Model {

    function __construct(){
        // Call the Model constructor
        parent::__construct();
    }
	
	function get_data($table_name){
		$this->db->where('user_type','user');
		$this->db->where('user_id',1);
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
		$sql = "SELECT * FROM ".TBL_USERS." WHERE ".TBL_USERS.".username = '$username' AND ".TBL_USERS.".password = '$password' AND ".TBL_USERS.".user_status='1'";
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

}
?>