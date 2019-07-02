<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {
  	function loadView($data)
  	{
    	$data['module'] = 'welcome';
    	echo Modules::run('templ/homeContent', $data);
  	}

	public function index()
	{
		$data['title'] = 'Alpine - Your Holiday Network';
		$data['view_file'] = 'index';
		$this->loadView($data);
	}
}
