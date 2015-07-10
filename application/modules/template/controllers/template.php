<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends MX_Controller {


	public function index()
	{
		$this->load->view('v_home');
	}

	public function product() {
		$this->load->view('v_product');
	}

	public function admin_secure_login() {
		$this->load->view('v_admin_secure_login');
	}

	public function admin_dashboard() {
		$this->load->view('v_admin_dashboard');
	}
}
