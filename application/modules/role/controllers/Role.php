<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Role extends MX_Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function loadView($data)
  {
    $data['module'] = 'role';
    echo Modules::run('templ/adminContent', $data);
  }

  public function index()
  {
    $data['title'] = "Administration - LIRS Informal Sector";
    $data['view_file'] = 'index';

    $this->loadView($data);
  }

}