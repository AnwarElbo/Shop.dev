<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function _show_all_categories() {
		$this->load->model('m_category');
		$data['categories'] = $this->m_category->getAllCategories();
		$this->load->view('v_show_categories', $data);
	}

	public function _show_products_category() {
		$this->load->model('m_category');
		$data['showProducts'] = $this->m_category->getProductsFromCategory($this->uri->segment(2,0));
		$this->load->view('products/v_show_products', $data);
	}

}
