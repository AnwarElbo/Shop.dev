<?php

$config = array(
                 'editProduct' => array(
                                    array(
                                             'field'   => 'productName', 
                                             'label'   => 'product name', 
                                             'rules'   => 'required|min_length[5]'
                                         ),
                                    array(
                                             'field'   => 'productPrice',
                                             'label'   => 'product price',
                                             'rules'   => 'required|numeric'
                                         ),
                                    array(
                                             'field'   => 'productSeoUrl',
                                             'label'   => 'Product URL',
                                             'rules'   => 'required|min_length[6]|alpha_dash'
                                         )
                                       )
               );