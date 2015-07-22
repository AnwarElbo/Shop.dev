<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function overview()
	{
		$this->load->model('m_admin_pages');

		$data['allPages'] = $this->m_admin_pages->getAllPages();

		$this->load->view('v_all_pages', $data);
	}

	public function edit() {
		//echo "test";
	}
}
