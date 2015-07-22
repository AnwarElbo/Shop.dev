<?php

class M_shopping_cart extends C_Webshop {

	private $cartSession;
	private $customerSession;

    public function __construct() {
        parent::__construct();

        if($this->session->userdata('cart_session') == FALSE OR $this->session->userdata('cart_session') == "") 
        {
        	$this->session->set_userdata('cart_session', password_hash(time(), PASSWORD_BCRYPT));
        	$this->session->set_userdata('customer_session', "");
        } elseif($this->session->userdata('customer_session') != FALSE OR $this->session->userdata('customer_session') != "") {
        	$this->session->set_userdata('cart_session', "");
        }
        $this->cartSession = $this->session->userdata('cart_session');
        $this->customerSession = $this->session->userdata('customer_session');
    }

    public function getCartProducts() {
    	$stmtGetCartProducts = $this->db->query('SELECT t2.name, t2.price, t1.amount FROM tbl_shopping_cart AS t1 
    											LEFT JOIN tbl_products AS t2 ON t1.product_id = t2.id 
    											WHERE t1.customer_id = ? AND t1.cart_session = ?', 
    											array($this->getCustomerId(), $this->cartSession));
    	return $stmtGetCartProducts->result_object();
    }

    public function addProductCart($productId, $amount) {
    	$stmtCheckProduct = $this->db->query('SELECT t1.id FROM tbl_shopping_cart AS t1 
    										  WHERE t1.product_id = ? AND t1.customer_id = ? AND t1.cart_session = ? LIMIT 1',
    										  array($productId, $this->getCustomerId(), $this->cartSession));

    	$stmtCheckProduct = $stmtCheckProduct->result_object();
    	if(isset($stmtCheckProduct[0])) 
    	{
    		$stmtUpdateProductCart = $this->db->query('UPDATE tbl_shopping_cart SET amount = amount + ? WHERE id = ? LIMIT 1', array($amount, $stmtCheckProduct[0]->id));
    	} else {
    		$stmtAddProductCart = $this->db->query('INSERT INTO tbl_shopping_cart (product_id, amount, cart_session, customer_id) VALUES (?, ?, ?, ?)',
    							  					array($productId, $amount, $this->cartSession, $this->getCustomerId()));
    	}
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

}