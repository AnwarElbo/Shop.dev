<?php

class C_Login extends CI_Model {

	protected $maxLogin = 5;

    function __construct()
    {	
        $this->load->library('session');
        parent::__construct();
    }
}