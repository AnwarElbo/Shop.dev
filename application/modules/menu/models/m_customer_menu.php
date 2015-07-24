<?php

class M_customer_menu extends C_Customer {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function getNameById() {
    	$stmtGetName = $this->db->query('SELECT name FROM tbl_customers WHERE id = ? LIMIT 1', array($this->getCustomerId()))->result_object();
    	return $stmtGetName;
    }
    
 

}