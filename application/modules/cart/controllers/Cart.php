<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_shopping_cart');
	}

	public function get_cart_products() {
		$this->load->view('v_cart_module', array('products' => $this->m_shopping_cart->getCartProducts()));
	}

	public function add_product_cart() {
		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') 
		{
			$this->m_shopping_cart->addProductCart($_POST['product_id'], $_POST['amount']);
		} else {
			show_404();
		}
	}

	public function _get_cart_button() {
		$this->load->view('v_cart_button');
	}

}
