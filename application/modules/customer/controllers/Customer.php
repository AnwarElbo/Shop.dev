<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function register() {
		$this->load->library('form_validation');
		if($_SERVER['REQUEST_METHOD'] == 'POST') {

			if($this->form_validation->run($this,'registerCustomer') == TRUE) {
				$this->load->model('m_customer');
				$validationKey = strtoupper(md5(time().$_POST['emailadres']));
				$this->m_customer->registerCustomer($_POST, $validationKey);
				$this->_success_register($_POST, $validationKey);
				return;
			}
		}
		$this->load->view('v_register_customer');
	}

	public function activate() {
		$this->load->model('m_customer');
		$customerId = $this->uri->segment(4, 0);
		if($customerId != 0) {
			if($this->m_customer->activate($this->uri->segment(3, 0), $customerId)) {
				$this->load->view('v_success_activate_customer');
			} else {
				$this->load->view('v_failed_activate_customer');
			}
		} else {
			show_404();
		}
	}

	public function logout() {
		$this->load->model('m_customer');
		$this->m_customer->logout();
		header("Location: /");
	}

	public function _success_register($form, $validationKey) {
		$this->m_customer->mailCustomer($form, $validationKey);
		$this->load->view('v_success_register_customer');
	}

	public function _email_customer_check($str) {
		$this->load->model('m_customer');
		if($this->m_customer->customerEmailExists($str)) {
			$this->form_validation->set_message('_email_customer_check', 'De %s staat al geregistreerd.');
			return false;
		}
		return true;
	}

	public function _check_terms($str) {
		if(!isset($_POST['terms'])) {
			$this->form_validation->set_message('_check_terms', 'De %s veld is verplicht aan te vinken.');
			return false;
		}
		return true;
	}
}
