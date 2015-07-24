<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends MY_Controller {


	public function index()
	{
		$this->load->view('v_home');
	}

	public function product() {
		$this->load->view('v_product');
	}

	public function products() {
		$this->load->view('v_show_products');
	}

	public function category() {
		$this->load->view('v_category');
	}

	public function admin_secure_login() {
		$this->load->view('v_admin_secure_login');
	}

	public function admin() {
		if($this->uri->segment(3) == FALSE) {
			$data['module'] = $this->uri->segment(2) . '/overview';
		} else {
			$data['module'] = $this->uri->segment(2).'/'.$this->uri->segment(3);
		}

		$this->load->view('v_admin_template', $data);
	}

	public function checkout() {
		$this->load->view('v_checkout');
	}

	public function customer_login() {
		$this->load->view('v_customer_login');
	}

	public function customer_register() {
		$this->load->view('v_customer_register');
	}

	public function customer_activate() {
		$this->load->view('v_customer_activate');
	}
}
