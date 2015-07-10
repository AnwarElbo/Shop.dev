<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message extends MX_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function get_errors()
	{
		$this->load->model('m_errors');
		$data['errors'] = $this->m_errors->getErrors();
		
		if(!empty($data['errors'])) 
		{
			$this->load->view('v_show_error', $data);
		}
	}

}
