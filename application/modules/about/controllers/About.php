<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends MX_Controller 
{
  function __construct()
  {
    parent::__construct();
  }

  function loadView($data)
  {
    $data['module'] = 'about';
    echo Modules::run('templ/homeContent', $data);
  }
	public function index()
	{
		$data['title'] = 'About - Alpine Your Holiday Network';
		$data['view_file'] = 'about';
		$this->loadView($data);
	}
}
