<?php

class M_catalogue extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function getNewProducts($limit = 9) {
    	$stmtGetNewProducts = $this->db->query("SELECT * FROM tbl_products ORDER BY created_at DESC LIMIT ".$limit);
    	return $stmtGetNewProducts->result_object();
    }
    
 

}