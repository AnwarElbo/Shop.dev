<?php

$config = array(
                 'editProduct' => array(
                                    array(
                                             'field'   => 'productName', 
                                             'label'   => 'product name', 
                                             'rules'   => 'required|min_length[5]|callback__product_name_check'
                                         ),
                                    array(
                                             'field'   => 'productPrice',
                                             'label'   => 'product price',
                                             'rules'   => 'required|numeric'
                                         ),
                                    array(
                                             'field'   => 'productSeoUrl',
                                             'label'   => 'product URL',
                                             'rules'   => 'min_length[6]|alpha_dash|callback__seo_url_check'
                                         )
                                       ),
                'newProduct' => array(
                                    array(
                                             'field'   => 'productName', 
                                             'label'   => 'product name', 
                                             'rules'   => 'required|min_length[5]|callback__product_name_check'
                                         ),
                                    array(
                                             'field'   => 'productPrice',
                                             'label'   => 'product price',
                                             'rules'   => 'required|numeric'
                                         ),
                                    array(
                                             'field'   => 'productSeoUrl',
                                             'label'   => 'product URL',
                                             'rules'   => 'min_length[6]|alpha_dash|callback__seo_url_check'
                                         )
                                       )
               );