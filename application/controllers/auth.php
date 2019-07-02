<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct()
	{
		parent::__construct();

        $this->load->helper('form');
		$this->load->library('Form_validation');
        //$this->load->library('auth_ldap');		
        $this->load->helper('url');
        $this->load->library('table');

	}

	public function index()
	{

	}

	public function login()
	{

	}
}