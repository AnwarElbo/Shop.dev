<?php

class M_admin_products extends C_Admin {

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin_categories');
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

    public function saveProduct($form, $productId) {
        $this->db->query('UPDATE tbl_products SET name = ?, description = ?, price = ?, seo_url = ?, disabled = ? WHERE id = ? LIMIT 1', 
                        array($form['productName'], $form['description'], $form['productPrice'], $form['productSeoUrl'], (isset($form['productDisabled'])) ? '1' : '0', $productId));
        $this->m_admin_categories->editMainCategory($form['productCategory'], $productId);
    }

    public function newProduct($form) {
        $this->db->query('INSERT INTO tbl_products (name, description, price, seo_url, created_at, updated_at, disabled) VALUES (?, ?, ?, ?, NOW(), NOW(), ?)',
                         array($form['productName'], $form['description'], $form['productPrice'], $form['productSeoUrl'], (isset($form['productDisabled'])) ? '1' : '0'));
        $this->m_admin_categories->newMainCategory($form['productCategory'], $this->db->insert_id());
    }

    public function checkSeoUrl($seoUrl, $productId) {
        $stmtCheckSeoUrl = $this->db->query('SELECT id FROM tbl_products WHERE seo_url = ? AND id != ? LIMIT 1', array($seoUrl, $productId));
        return isset($stmtCheckSeoUrl->result_object()[0]);
    }

    public function checkProductName($productName, $productId) {
        $stmtCheckProductName = $this->db->query('SELECT id FROM tbl_products WHERE name = ? AND id != ? LIMIT 1', array($productName, $productId));
        return isset($stmtCheckProductName->result_object()[0]);
    }
}