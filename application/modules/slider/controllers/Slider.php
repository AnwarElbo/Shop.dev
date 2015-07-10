<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slider extends MX_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function get_slider()
	{
		$this->load->view('v_get_slider');
	}

}
