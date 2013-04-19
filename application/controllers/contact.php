<?php 

class Contact extends CI_Controller {
	
	private function load_model(){
		$this->load->model('site_model');
	}
	
	public function index()
	{
		$this->template->load('site/templates/site_template', 'site/contact_view');
	}
}