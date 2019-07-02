<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends MX_Controller 
{
  function __construct()
  {
    parent::__construct();
  }

  function loadView($data)
  {
    $data['module'] = 'member';
    echo Modules::run('templ/homeContent', $data);
  }
	public function index()
	{
		$data['title'] = 'Member - Alpine Your Holiday Network';
    $data['view_file'] = 'member';
		$this->loadView($data);
	}
}
