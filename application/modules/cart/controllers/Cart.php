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
		$this->m_shopping_cart->addProductCart($_POST['product_id'], $_POST['amount']);
	}

	public function edit_product_cart() {
		$this->m_shopping_cart->addProductCart($_POST['product_id'], $_POST['amount'], 1);
	}

	public function _get_cart_button() {
		$this->load->view('v_cart_button');
	}

	public function _show_cart() {
		$data['products'] = $this->m_shopping_cart->getCheckoutCartProducts();
		$this->load->view('v_show_cart', $data);
	}

	public function remove_product_cart() {
		$this->m_shopping_cart->removeProductCart($_POST['product_id']);
	}
}
