<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Catalogue extends MX_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function new_products()
	{
		$this->load->model("products/m_products");
		$data['newProducts'] = $this->m_products->getNewProducts();
		$this->load->view('v_new_products', $data);
	}

}
