<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CKEditor extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}

	// Admin functions 
	public function get_ckeditor($param = "") {
		$data['value'] = $param;
		$this->load->view('v_admin_ckeditor', $data);
		
	}

}
