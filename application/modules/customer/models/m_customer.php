<?php

class M_customer extends C_Customer {

    public function __construct()
    {
        parent::__construct();
    }


    public function getCustomerInfo() {

    }

    public function registerCustomer($form, $validationKey) {
        
        $this->db->query('INSERT INTO tbl_customers (
                            email,
                            password,
                            name,
                            last_name,
                            phonenumber,
                            street,
                            housenumber,
                            zipcode,
                            city,
                            newsletter,
                            validation_key
                            ) VALUES (?,?,?,?,?,?,?,?,?,?,?)',
                            array($form['emailadres'], password_hash($form['password'], PASSWORD_BCRYPT), $form['name'], $form['last-name'],
                            $form['phonenumber'], $form['street'], $form['housenumber'], $form['zipcode'], $form['city'], 0, $validationKey));
    }

    public function mailCustomer($form, $validationKey) {
        //{domain}/customer/activate/{validation_key}/{customer_id}
        $domain = base_url();
        $mailTemplate = file_get_contents(MODDIR."template/email/template_new_customer.html");

        $mailTemplate = str_ireplace("{domain}", $domain, $mailTemplate);
        $mailTemplate = str_ireplace("{validation_key}", $validationKey, $mailTemplate);
        $mailTemplate = str_ireplace("{name}", $form['name'], $mailTemplate);
        $mailTemplate = str_ireplace("{customer_id}", $this->db->insert_id(), $mailTemplate);

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: Anwar El Bouhdifi <anwar@elbo.com>' . "\r\n";

        mail($form['emailadres'], "Confirm your emailadres", $mailTemplate, $headers);
    }

    public function customerEmailExists($email) {
        $stmtCheckEmail = $this->db->query('SELECT id FROM tbl_customers WHERE email = ? LIMIT 1', array($email))->result_object();

        if(isset($stmtCheckEmail[0])) {
            return true;
        }
        return false;
    }

    public function activate($validationKey, $customerId) {
        $stmtGetKey = $this->db->query('SELECT validation_key FROM tbl_customers WHERE id = ? LIMIT 1', array($customerId));
        $stmtGetKey = $stmtGetKey->result_object();

        if(isset($stmtGetKey[0]) && $stmtGetKey[0]->validation_key != "") {

            if($validationKey == $stmtGetKey[0]->validation_key) {
                $this->db->query('UPDATE tbl_customers SET validation_key = "" WHERE validation_key = ? AND id = ? LIMIT 1', array($validationKey, $customerId));
                return true;
            }
        }
        return false;
    }

    public function login($form) {
        $stmtGetPassword = $this->db->query('SELECT password FROM tbl_customers WHERE email = ? LIMIT 1', array($form['customerEmail']))->result_object();
        
        if(isset($stmtGetPassword[0])) {
            if(password_verify($form['customerPassword'], $stmtGetPassword[0]->password)) {
                return true;
            }
        }
        return false;
    }

    public function convertGuestShoppingCart() {
        $this->db->query('UPDATE tbl_shopping_cart SET customer_id = ?, cart_session = "" WHERE cart_session = ?', array($this->getCustomerId(), $this->cartSession));
        $this->session->set_userdata('cart_session', "");
    }

    public function logout() {
        $this->session->unset_userdata('customer_session');
    }
}