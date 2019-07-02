<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends MX_Controller 
{
    function __construct()
  {
    parent::__construct();
  }

  function loadView($data)
  {
    $data['module'] = 'contact';
    echo Modules::run('templ/homeContent', $data);
  }
	public function index()
	{
		$data['title'] = 'Contact - Alpine Your Holiday Network';
    $data['view_file'] = 'contact';

    $this->loadView($data);
  }

  public function sendEmail()
  {

    $this->form_validation->set_rules('name', 'Name', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('phone', 'Phone Number', 'required');
    $this->form_validation->set_rules('message', 'Message', 'required');

    if($this->form_validation->run() == FALSE)
    {
      $_SESSION['msg'] = '<div class="alert alert-warning"><i class="fa fa-bolt"></i> Error, hightlighted fields must not be empty.</div>';
      redirect('/contact/contact');
    }
    else
    {
      
      $data = $this->get_data_from_post();

       $sql = "insert into contact (name, email, phone, message)
       values('".$data['name']."', '".$data['email']."', '".$data['phone']."', '".$data['message']."')";
       //var_dump($sql); exit();

      //transfering into database
      $this->_insert_contact($sql);

      $data['message'] = 'Data Inserted Successfully';
       $this->_custom_query($sql);
      $_SESSION['msg'] = '<div class="alert alert-success"><i class="fa fa-check"></i> Success, Contact form Submitted.</div>';
     
      redirect('/about/about');
    }

  
  }
  
  public function get_data_from_post()
  {
    $data = array();
    $data['name'] = $this->input->post('name', TRUE);
    $data['email'] = $this->input->post('email', TRUE);
    $data['phone'] = $this->input->post('phone', TRUE);
    $data['message'] = $this->input->post('message', TRUE);
    return $data;
  }

  public function _insert_contact($data)
  {
    $this->load->model('mdl_contact');
    //var_dump($data); exit();
    $this->mdl_contact->_insert_contact($data);
  }

  public function _custom_query($mysql_query)
  {
    
    $this->load->model('mdl_contact');
    $query = $this->mdl_contact->_custom_query($mysql_query);
    
    return $query;
  }
}
?>