<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends MY_Controller {

	private $productId;

	public function __construct() {
		parent::__construct();
		$this->productId = $this->uri->segment(4,0);
	}

	// Admin functions 
	public function add() {
		
		$this->load->model('m_admin_products');
		$this->load->model('m_admin_categories');
		$this->load->library('form_validation');
		if($_SERVER['REQUEST_METHOD'] == 'POST') 
		{

			if($this->form_validation->run($this,'newProduct') == TRUE) 
			{ 
				$this->m_admin_products->newProduct($_POST);
				$this->redirectToReferer();
			}
		}

		$data['categories'] = $this->m_admin_categories->getAllCategories();
		$this->load->view('v_admin_new_product', $data);
	}
	public function overview() {
		$this->load->model('m_admin_products');
		$data['allProducts'] = $this->m_admin_products->getAllProducts();
		$this->load->view('v_admin_all_products', $data);
	}

	public function edit() {
		$this->load->model('m_admin_products');
		$this->load->model('m_admin_categories');
		$this->load->library('form_validation');

		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['saveProduct'])) 
		{

			if($this->form_validation->run($this, 'editProduct') == TRUE) 
			{ 
				$this->m_admin_products->saveProduct($_POST, $this->productId);
				//$this->redirectToReferer();
			}
		}

		$data['product'] = $this->m_admin_products->getProductById($this->productId);
		$data['categories'] = $this->m_admin_categories->getAllCategories();
		$data['mainCategory'] = $this->m_admin_categories->getMainCategory($this->productId);

		$this->load->view('v_admin_edit_product', $data);
	}

	// Public functions
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



	// Protected functions
	public function _seo_url_check($str) {
		if($this->m_admin_products->checkSeoUrl($str, $this->uri->segment(4,0))) 
		{
			$this->form_validation->set_message('_seo_url_check', 'The %s field already exists.');
			return false;
		}
		return true;
	}

	public function _product_name_check($str) {
		if($this->m_admin_products->checkProductName($str, $this->uri->segment(4,0))) 
		{
			$this->form_validation->set_message('_product_name_check', 'The %s field already exists.');
			return false;
		}
		return true;
	}

	public function _edit_categories() {
		$this->load->model('m_admin_categories');
		if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['saveCategories'])) 
		{
			$this->m_admin_categories->saveCategories($this->productId, $_POST['selectedCategories']);
		}
		$data['selectedCategories'] = $this->m_admin_categories->getSelectedCategories($this->productId);
		$this->load->view('v_admin_edit_categories', $data);
	}
}
