<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Boilerplate extends MX_Controller {

	public function index()
	{
		$this->load->view('index');
	}
}
