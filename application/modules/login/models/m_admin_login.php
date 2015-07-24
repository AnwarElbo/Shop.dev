<?php

class M_admin_login extends C_Admin {

    private $maxLogin = 5;
    
    function __construct()
    {
        parent::__construct();
    }

    public function adminLogin($form) {
    	// Check if user exists and get password, attempts, id
    	$stmtGetAdmin = $this->db->query('SELECT id, password, login_attempts FROM tbl_users WHERE username = ? LIMIT 1', array($form['adminUsername']));
    	$stmtGetAdmin = $stmtGetAdmin->result_object();

		if(isset($stmtGetAdmin[0])) 
		{
			// Check if max attempts is exceeded
			if($stmtGetAdmin[0]->login_attempts <= $this->maxLogin)
			{
				// If user exists, check if password match
				if(password_verify($form['adminPassword'], $stmtGetAdmin[0]->password)) {
					$this->setAdminSession($stmtGetAdmin[0]->id);
					return true;
				}
			}
		}
		return false;
    }

    private function setAdminSession($id) {
    	// Create hash from shuffled time
    	$sessionHash =  md5(str_shuffle(time()));

    	// Update table with session
    	$this->db->query('UPDATE tbl_users SET session_hash = ? WHERE id = ? LIMIT 1', array($sessionHash, $id));

    	// Set session
    	$this->session->set_userdata('admin_hash', $sessionHash);

    }

}