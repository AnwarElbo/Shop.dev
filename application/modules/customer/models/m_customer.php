<?php

class M_customer extends C_Webshop {

	private $customerSession;

    public function __construct()
    {
        parent::__construct();

        if($this->session->userdata('customer_session') != FALSE OR $this->session->userdata('customer_session') != "") {
        	$this->session->set_userdata('customer_session', '');
        }
    }


    public function getCustomerInfo() {

    }
}