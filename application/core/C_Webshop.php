<?php

class C_Webshop extends CI_Model {

    function __construct()
    {	
        parent::__construct();
        $this->load->library('session');
    }
}