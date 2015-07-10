<?php

class M_admin_products extends C_Admin {

    function __construct()
    {
        parent::__construct();
    }


    public function getAllProducts() {
    	$stmtGetAllProducts = $this->db->query('SELECT t1.id, t1.name, t3.category FROM tbl_products AS t1 
    											LEFT JOIN tbl_product_category AS t2 ON t1.id = t2.product_id
    											LEFT JOIN tbl_category AS t3 ON t3.id = t2.category_id
    											WHERE t2.main = 1');
    	return $stmtGetAllProducts->result_object();
    }

    public function getProductById($id) {
        $stmtGetProduct = $this->db->query('SELECT t1.id, t1.name, t3.category FROM tbl_products AS t1 
                                            LEFT JOIN tbl_product_category AS t2 ON t1.id = t2.product_id
                                            LEFT JOIN tbl_category AS t3 ON t3.id = t2.category_id
                                            WHERE t2.main = 1 AND t1.id = ?', array($id));
        return $stmtGetProduct->result_object();
    }
 

}