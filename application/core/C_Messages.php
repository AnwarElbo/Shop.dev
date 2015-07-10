<?php

class C_Messages extends CI_Model {

	protected $alert = array();
	protected $info = array();
	protected $error = array();

	function __construct()
	{	
		parent::__construct();
	}

	public function getErrors() 
	{
		return $this->error;
	}
}