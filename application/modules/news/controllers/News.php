<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends MX_Controller 
{
  function __construct()
  {
    parent::__construct();
  }

  function loadView($data)
  {
    $data['module'] = 'news';
    echo Modules::run('templ/homeContent', $data);
  }
	public function index()
	{
		$data['title'] = 'News - Alpine Your Holiday Network';
    $data['view_file'] = 'news';
    $this->loadView($data);
	}
}
