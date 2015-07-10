<?php

class M_errors extends C_Messages {


    function __construct()
    {
        parent::__construct();
    }

    public function addError($error) {
    	$this->error[] = $error;
    }

}