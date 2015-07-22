<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('message/m_errors');
	}

	public function secure_admin_login() {
		$this->load->model('m_admin_login');

		if($this->m_admin_login->validateAdmin()) 
		{
			$this->redirectToDashboard();
		}

		if($_SERVER['REQUEST_METHOD'] == "POST")
		{	
			// Validate login
			$adminLogin = $this->m_admin_login->adminLogin($_POST);
			
			if($adminLogin == TRUE) {
				$this->redirectToDashboard();
			} else {
				$this->m_errors->addError('Verkeerde gebruikersnaam/wachtwoord..');
			}
		}
		$this->load->view('v_admin_login');
	}

}
