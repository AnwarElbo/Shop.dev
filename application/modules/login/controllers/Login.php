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
			if($this->m_admin_login->adminLogin($_POST)) {
				$this->redirectToDashboard();
			} else {
				$this->m_errors->addError('Verkeerde gebruikersnaam/wachtwoord..');
			}
		}
		$this->load->view('v_admin_login');
	}

	public function secure_customer_login() {

		$this->load->model('customer/m_customer');
		if($this->m_customer->validateCustomer()) {
			header('Location: /');
		}

		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
			if($this->m_customer->login($_POST)) {
				$this->m_customer->setCustomerSession($_POST['customerEmail']);
				$this->m_customer->convertGuestShoppingCart();
				header('Location: /');
			} else {
				$this->m_errors->addError('Verkeerde gebruikersnaam/wachtwoord..');
			}
		
		}

		$this->load->view('v_customer_login');

	}

}
