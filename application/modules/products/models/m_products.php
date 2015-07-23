<?php

class M_products extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getNewProducts($limit = 9) 
    {
    	$stmtGetNewProducts = $this->db->query("SELECT * FROM tbl_products ORDER BY created_at DESC LIMIT ".$limit);
    	return $stmtGetNewProducts->result_object();
    }

    public function getProductByUrl($URL) 
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

    public function getOverviewProducts() {
        $stmtGetAllProducts = $this->db->query('SELECT t1.id, t1.name, t1.seo_url, t3.category, t1.price FROM tbl_products AS t1 
                                                LEFT JOIN tbl_product_category AS t2 ON t1.id = t2.product_id
                                                LEFT JOIN tbl_category AS t3 ON t3.id = t2.category_id
                                                WHERE t2.main = 1 AND t1.disabled = 0 LIMIT 12');
        return $stmtGetAllProducts->result_object();
    }
}