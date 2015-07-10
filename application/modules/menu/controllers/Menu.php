<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends MX_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function head_menu()
	{
		$this->load->model("menu/m_menu");
		$data['headMenu'] = $this->m_menu->getHeadMenu();
		$this->load->view('v_head_menu', $data);
	}


	public function admin_menu() {
		$this->load->model("m_admin_menu");
		$data['adminMenu'] = $this->m_admin_menu->getAdminMenu();
		$this->load->view('v_admin_menu');
	}

}
