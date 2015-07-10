<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Uploader extends MX_Controller {

	public function __construct() {
		parent::__construct();
	}

	// Admin functions 
	public function ckeditor_upload() {
		var_dump($_FILES);
		die;
		
	}

}
