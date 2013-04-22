<?php 

class Vacancies extends CI_Controller {
	
	private function load_model(){
		$this->load->model('site_model');
	}
	
	public function index()
	{
		$this->template->load('site/templates/site_template', 'site/vacancies');
	}
	public function transportation()
	{
		$this->template->load('site/templates/site_template', 'site/transportation');
	}
}