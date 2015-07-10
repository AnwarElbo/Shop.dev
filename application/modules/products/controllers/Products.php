<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends MX_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function get_product_by_url()
	{
		if($this->uri->segment(3) != FALSE && $this->uri->segment(2) != FALSE ) 
		{
			$this->load->model("products/m_products");
			$data['product'] = $this->m_products->getProductByUrl($this->uri->segment_array());
			$this->load->view('v_get_product', $data);
		} else {
			show_404();
		}
	}

}
