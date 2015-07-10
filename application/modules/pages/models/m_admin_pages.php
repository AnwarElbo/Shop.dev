<?php

class M_admin_pages extends C_Admin {


    function __construct()
    {
        parent::__construct();
    }

    public function getAllPages() {
    	$stmtGetAllPages = $this->db->query('SELECT id, name FROM tbl_pages ORDER BY name ASC');
    	return $stmtGetAllPages->result_object();
    	
    }


}