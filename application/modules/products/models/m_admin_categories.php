<?php

class M_admin_categories extends C_Admin {

    function __construct()
    {
        parent::__construct();
    }

    public function saveCategories($productId, $selectedCategories = array()) {
    	$this->db->query('DELETE FROM tbl_product_category WHERE product_id = ? AND main = 0 ', array($productId));

    	foreach($selectedCategories as $category){	
    		$this->db->query('INSERT INTO tbl_product_category (product_id, category_id, main) VALUES (?, ?, 0)', array($productId, $category));
    	}
    	
    }

    public function getAllCategories() {
        $stmtGetAllCategories = $this->db->query('SELECT id, category FROM tbl_category');
        return $stmtGetAllCategories->result_object();
    }

    public function getMainCategory($productId) {
        $stmtGetMainCategory = $this->db->query('SELECT category_id FROM tbl_product_category WHERE main = 1 AND product_id = ? LIMIT 1', array($productId));
        return $stmtGetMainCategory->result_object();
    }
    

    public function editMainCategory($newCategoryId, $productId) {
    	$this->db->query('DELETE FROM tbl_product_category WHERE (product_id = ? AND main = 1) OR (product_id = ? AND category_id = ? AND main = 0) LIMIT 2', array($productId, $productId, $newCategoryId));
        $this->newMainCategory($newCategoryId, $productId);
    }

    public function newMainCategory($categoryId, $productId) {
        $this->db->query('INSERT INTO tbl_product_category (product_id, category_id, main) VALUES (?, ?, 1)', array($productId, $categoryId));
    }


    public function getSelectedCategories($productId) {
    	$stmtGetSelectedCategories = $this->db->query('SELECT t2.id, t2.category, t1.main FROM tbl_product_category AS t1 LEFT JOIN tbl_category AS t2 ON t1.category_id = t2.id WHERE t1.product_id = ? ', array($productId));
    	return $stmtGetSelectedCategories->result_object();
    }

}