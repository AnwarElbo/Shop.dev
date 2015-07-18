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
        $stmtGetProduct = $this->db->query('SELECT t1.id, t1.name, t2.category_id, t1.description, t1.price, t1.seo_url, t1.disabled FROM tbl_products AS t1 
                                            LEFT JOIN tbl_product_category AS t2 ON t1.id = t2.product_id
                                            LEFT JOIN tbl_category AS t3 ON t3.id = t2.category_id
                                            WHERE t2.main = 1 AND t1.id = ? LIMIT 1', array($id));
        return $stmtGetProduct->result_object();
    }

    public function getAllCategories() {
        $stmtGetAllCategories = $this->db->query('SELECT id, category FROM tbl_category');
        return $stmtGetAllCategories->result_object();
    }

    public function getMainCategory($productId) {
        $stmtGetMainCategory = $this->db->query('SELECT category_id FROM tbl_product_category WHERE main = 1 AND product_id = ? LIMIT 1', array($productId));
        return $stmtGetMainCategory->result_object();
    }
    
    public function saveProduct($form, $productId) {
        $var = $this->db->query('UPDATE tbl_products SET name = ?, description = ?, price = ?, seo_url = ?, disabled = ? WHERE id = ? LIMIT 1'
                                            , array($form['productName'], $form['description'], $form['productPrice'], $form['productSeoUrl'], (isset($form['productDisabled'])) ? '1' : '0', $productId));
        var_dump($this->db->affected_rows());
            return;
    }

}