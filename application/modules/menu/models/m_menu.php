<?php

class M_menu extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

    function getHeadMenu() {
    	$stmtGetNewProducts = $this->db->query("SELECT t2.name, t2.link FROM tbl_menu AS t1 LEFT JOIN tbl_menu_list AS t2 ON t1.id = t2.menu_id WHERE t1.active = 1");
    	return $stmtGetNewProducts->result_object();
    }
    
 

}