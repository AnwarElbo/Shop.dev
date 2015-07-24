<?php

$config = array(
                 'editProduct' => array(
                                    array(
                                             'field'   => 'productName', 
                                             'label'   => 'product name', 
                                             'rules'   => 'trim|required|min_length[5]|callback__product_name_check'
                                         ),
                                    array(
                                             'field'   => 'productPrice',
                                             'label'   => 'product price',
                                             'rules'   => 'trim|required|numeric'
                                         ),
                                    array(
                                             'field'   => 'productSeoUrl',
                                             'label'   => 'product URL',
                                             'rules'   => 'trim|min_length[6]|alpha_dash|callback__seo_url_check'
                                         )
                                       ),
                'newProduct' => array(
                                    array(
                                             'field'   => 'productName', 
                                             'label'   => 'product name', 
                                             'rules'   => 'trim|required|min_length[5]|callback__product_name_check'
                                         ),
                                    array(
                                             'field'   => 'productPrice',
                                             'label'   => 'product price',
                                             'rules'   => 'trim|required|numeric'
                                         ),
                                    array(
                                             'field'   => 'productSeoUrl',
                                             'label'   => 'product URL',
                                             'rules'   => 'trim|min_length[6]|alpha_dash|callback__seo_url_check'
                                         )
                                       ),
                'registerCustomer' => array(
                                        array(
                                            'field' => 'emailadres',
                                            'label' => 'Emailadres',
                                            'rules' => 'trim|required|min_length[5]|valid_email|callback__email_customer_check'
                                            ),
                                        array(
                                            'field' => 'password',
                                            'label' => 'Wachtwoord',
                                            'rules' => 'trim|required|min_length[5]|matches[password-conf]'
                                            ),
                                        array(
                                            'field' => 'name',
                                            'label' => 'Voornaam',
                                            'rules' => 'trim|required|xss_clean'
                                            ),
                                        array(
                                            'field' => 'last-name',
                                            'label' => 'Achternaam',
                                            'rules' => 'trim|required|xss_clean'
                                            ),
                                        array(
                                            'field' => 'phonenumber',
                                            'label' => 'Telefoonnummer',
                                            'rules' => 'trim|required|numeric'
                                            ),
                                        array(
                                            'field' => 'street',
                                            'label' => 'Straat',
                                            'rules' => 'trim|required|alpha_numeric'
                                            ),
                                        array(
                                            'field' => 'housenumber',
                                            'label' => 'Huisnummer',
                                            'rules' => 'trim|required|numeric'
                                            ),
                                        array(
                                            'field' => 'city',
                                            'label' => 'Stad',
                                            'rules' => 'trim|required'
                                            ),
                                        array(
                                            'field' => 'zipcode',
                                            'label' => 'Postcode',
                                            'rules' => 'trim|required|min_length[4]|alpha_numeric'
                                            ),
                                        array(
                                            'field' => 'terms',
                                            'label' => 'Algemene voorwaarden',
                                            'rules' => 'callback__check_terms'
                                            )

                                        )
               );