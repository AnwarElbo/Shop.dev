<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CKEditor extends MX_Controller {

	public function __construct() {
		parent::__construct();
	}

	// Admin functions 
	public function get_ckeditor() {
		$this->load->view('v_admin_ckeditor');
		
	}

}