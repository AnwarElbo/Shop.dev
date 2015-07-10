<?php

class M_products extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    function getNewProducts($limit = 9) 
    {
    	$stmtGetNewProducts = $this->db->query("SELECT * FROM tbl_products ORDER BY created_at DESC LIMIT ".$limit);
    	return $stmtGetNewProducts->result_object();
    }

    function getProductByUrl($URL) 
    {
    	$seoUrl = $URL[2];
    	$productId = $URL[3];

    	$stmtGetProduct = $this->db->query("SELECT * FROM tbl_products WHERE seo_url = ? AND id = ? LIMIT 1", array($seoUrl, $productId));
    	if($stmtGetProduct->num_rows() > 0) {
 	   		return $stmtGetProduct->result_object();
 	   	} else {
 	   		show_404();
 	   	}
    }
    
 

}