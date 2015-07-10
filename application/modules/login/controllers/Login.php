<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MX_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('message/m_errors');
	}

	public function secure_admin_login() {

		if($_SERVER['REQUEST_METHOD'] == "POST")
		{	
			// Validate login
			$this->load->model('m_admin_login');
			$adminLogin = $this->m_admin_login->adminLogin($_POST);
			
			if($adminLogin == TRUE) {
				header("Location: /admin/dashboard");
			} else {
				$this->m_errors->addError('Verkeerde gebruikersnaam/wachtwoord..');
			}
		}
		$this->load->view('v_admin_login');
	}

}
