<?php

class M_category extends C_Webshop {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    public function getAllCategories() {
        $stmtGetAllCategories = $this->db->query('SELECT id, category, url FROM tbl_category');
        return $stmtGetAllCategories->result_object();
    }

    public function getProductsFromCategory($category, $offset = 0) {
    	$stmtGetProductFromCategory = $this->db->query('SELECT t1.id, t1.name, t1.seo_url, t1.price FROM tbl_product_category AS t2 
														LEFT JOIN tbl_products AS t1 ON t1.id = t2.product_id
														LEFT JOIN tbl_category AS t3 ON t3.id = t2.category_id
		                                                WHERE t1.disabled = 0 AND t3.category = ? LIMIT '.$offset.', 12', array($category));
   		return $stmtGetProductFromCategory->result_object(); 
    }
}