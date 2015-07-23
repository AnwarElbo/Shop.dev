<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Checkout extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index()
	{
		echo modules::run('cart/_show_cart');
	}

	public function cart() {
		$this->index();
	}

	public function step1() {
		$this->load->model('customer/m_customer.php');
		$data['customerInfo'] = $this->m_customer->getCustomerInfo();
	}
}
