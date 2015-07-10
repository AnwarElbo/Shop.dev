<?php

class C_Admin extends CI_Model {

	private $sessionHash;

    function __construct()
    {	
        parent::__construct();
        $this->load->library('session');
        $this->sessionHash = $this->session->userdata('admin_hash');
        $this->rehashAdminSession();

    } 

    public function rehashAdminSession() 
    {
    	if($this->validateAdmin())
    	{
	    	$newSessionHash = password_hash($this->sessionHash, PASSWORD_BCRYPT);
	    	$this->session->set_userdata('admin_hash', $newSessionHash);
	    	$this->db->query('UPDATE tbl_users SET session_hash = ? WHERE session_hash = ? LIMIT 1', array($newSessionHash, $this->sessionHash));
    	}
    }

    public function validateAdmin() 
    {

    	if($this->sessionHash != FALSE && $this->sessionHash != "" && $this->sessionHash != NULL) {

    		$stmtValidateAdmin = $this->db->query('SELECT id FROM tbl_users WHERE session_hash = ? LIMIT 1', array($this->sessionHash));
    		$stmtValidateAdmin = $stmtValidateAdmin->result_object();

    		if(isset($stmtValidateAdmin[0])) {
    			return true;
    		}
    	}
    	
    	header('Location: /');
    	return false;
    }


    
}