<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MX_Controller {

  public function __contruct()
  {
    parent::__contruct();
    $this->load->library('Form_validation');
  }
  function loadView($data)
  {
    $data['module'] = 'dashboard';
    echo Modules::run('templ/dashContent', $data);
  }

  public function index()
  {
  	$data['title'] = "Welcome - Alpine portal";
  	$data['view_file'] = 'home';  
  	$this->loadView($data);	
  }

  public function itinerary()
  {
    $data['title'] = "Create itinerary - Alpine portal";
    $data['view_file'] = 'itinerary';  
    $this->loadView($data); 
  }  
}
