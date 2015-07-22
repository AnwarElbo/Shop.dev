<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_dashboard');
	}

	public function overview() {
		$this->load->view('v_admin_dashboard');
	}
}
