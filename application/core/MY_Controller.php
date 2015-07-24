<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends MX_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library("session");
	}

	protected function redirectToLogin() {
		header('Location: /admin/login');
	}

	protected function redirectToDashboard() {
		header('Location: /admin/dashboard');
	}

	protected function redirectToReferer() {
		if($_SERVER['HTTP_REFERER'] == "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']) 
		{
			header('Location: /admin/dashboard');
		} else {
			//header('Location: '. $_SERVER['HTTP_REFERER']);
			header('Location: /admin/dashboard');
		}
		
	}
}
