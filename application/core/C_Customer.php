<?php

class C_Customer extends CI_Model {
	
	protected $customerSession;

	protected $cartSession;

	function __construct()
	{	
		parent::__construct();
		$this->load->library('session');

        if($this->session->userdata('cart_session') == FALSE AND $this->session->userdata('customer_session') == FALSE) {
            $this->session->set_userdata('cart_session', md5(str_shuffle(time())));
            $this->session->set_userdata('customer_session', "");
        }

        $this->cartSession = $this->session->userdata('cart_session');
        $this->customerSession = $this->session->userdata('customer_session');
	}

	public function getCustomerId() {
        $stmtGetCustomerId = $this->db->query('SELECT id FROM tbl_customers WHERE customer_session = ? LIMIT 1', array($this->customerSession));

        $stmtGetCustomerId = $stmtGetCustomerId->result_object();
        if(!isset($stmtGetCustomerId[0]))
        {
            return 0;
        } else {
            return $stmtGetCustomerId[0]->id;
        }
    }

    public function setCustomerSession($email) {
        $this->customerSession = md5(str_shuffle(time()));
        $this->db->query('UPDATE tbl_customers SET customer_session = ? WHERE email = ? LIMIT 1', array($this->customerSession, $email));
        $this->session->set_userdata('customer_session', $this->customerSession);
    } 

    public function validateCustomer() {

        if($this->customerSession != FALSE && $this->customerSession != "" && $this->customerSession != NULL) {

            $stmtCheckSession = $this->db->query('SELECT id FROM tbl_customers WHERE customer_session = ? LIMIT 1', array($this->customerSession))->result_object();
           
            if(isset($stmtCheckSession[0])) {
                return true;
            }
        }
        return false;
    }
}