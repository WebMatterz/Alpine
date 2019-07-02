<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends MX_Controller 
{
  function __construct()
  {
    parent::__construct();
  }

  function loadView($data)
  {
    $data['module'] = 'service';
    echo Modules::run('templ/homeContent', $data);
  }
	public function index()
	{
		$data['title'] = 'Service - Alpine Your Holiday Network';
    $data['view_file'] = 'service';
    $this->loadView($data);
	}
}
