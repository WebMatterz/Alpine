<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');

class User extends MX_Controller
{

  function __construct()
  {
    parent::__construct();
  }

  function loadView($data)
  {
    $data['module'] = 'user';
    echo Modules::run('templ/adminContent', $data);
  }

  public function index()
  {
    $this->load->model('mdl_user');
    $res = $this->mdl_user->get_all_stations();
    $usr = $this->mdl_user->get_all_users();

    $data['station_list'] = $res[1];
    $data['user_list'] = $usr[1];
    $data['title'] = "Administration - LIRS Informal Sector";
    $data['view_file'] = 'index';

    $this->loadView($data);
  }

  public function userlist()
  {
    $this->load->model('mdl_user');
    $usr = $this->mdl_user->get_all_users();

    $data['user_list'] = $usr[1];
    $data['title'] = "Administration - LIRS Informal Sector";
    $data['view_file'] = 'userlist';

    // var_dump($data['user_list']); exit();

    $this->loadView($data);
  }

  public function usrsubmit()
  {
    $this->form_validation->set_rules('usercode', 'User Code', 'required');
    $this->form_validation->set_rules('staffname', 'Staff name', 'required');
    $this->form_validation->set_rules('emailaddress', 'Email Address', 'required');
    $this->form_validation->set_rules('admin', 'Administrator', 'required');
    $this->form_validation->set_rules('usertype', 'User Type', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if($this->form_validation->run() == FALSE)
    {
      $_SESSION['msg'] = '<div class="alert alert-warning"><i class="fa fa-bolt"></i> Error, all fields must not be empty.</div>';
      redirect('/user/userlist');
    }
    else
    {
      $user = $this->input->post('usercode', TRUE);
      $data = $this->get_data_from_post();
      $check_user = $this->check_user($user);

      if($check_user != true)
      {
        $this->_insert($data);

        // log audit trail
        $username = $_SESSION['username'];
        $this->fire_audit_log($username, '/'.$this->router->fetch_class().'/'.$this->router->fetch_method(), 'User: '.$user, 'CREATE-USER');

        redirect('/user/userlist');
      }
      else
      {
        $_SESSION['msg'] = "<div class='alert alert-warning'><i class='fa fa-warning'></i> $user User already exist.</div>";
        redirect('/user/userlist');
      }
    }
  }

  public function statusersubmit()
  {
    $this->form_validation->set_rules('allstation', 'Select Station', 'required');
    $this->form_validation->set_rules('allusers', 'Select User', 'required');

    if($this->form_validation->run() == FALSE)
    {
      $_SESSION['msg'] = '<div class="alert alert-warning"><i class="fa fa-bolt"></i> Error, all fields must not be empty.</div>';
      redirect('/user/userlist');
    }
    else
    {
      $user = $this->input->post('allusers', TRUE);
      $data = $this->get_stat_user_data_from_post();
      $check_user = $this->check_station_user($user);

      if ($check_user != true)
      {
        $this->_insert_station_user($data);

        // log audit trail
        $username = $_SESSION['username'];
        $this->fire_audit_log($username, '/'.$this->router->fetch_class().'/'.$this->router->fetch_method(), 'User: '.$user, 'CREATE-STATION-USER');

        redirect('/user/userlist');
      }
      else {
        $_SESSION['msg'] = "<div class='alert alert-warning'><i class='fa fa-warning'></i> $user User already exist.</div>";
        redirect('/user/userlist');
      }
    }
  }

  public function _insert($data)
  {
    $this->load->model('mdl_user');
    $this->mdl_user->_insert($data);
  }

  public function get_data_from_post()
  {
    $data = array();
    $hashedpassword = $this->input->post('password', TRUE);

    $data['user_code'] = $this->input->post('usercode', TRUE);
    $data['name'] = $this->input->post('staffname', TRUE);
    $data['email'] = $this->input->post('emailaddress', TRUE);
    $data['email_verified_at'] = date("Y-m-d h:i:s");
    $data['admin'] = $this->input->post('admin', TRUE);
    $data['is_locked'] = 0;
    $data['user_type'] = $this->input->post('usertype', TRUE);
    $data['password'] = md5($hashedpassword);
    $data['created_at'] = date("Y-m-d h:i:s");
    $data['updated_at'] = date("Y-m-d h:i:s");

    return $data;
  }

  public function _custom_query($mysql_query)
  {
    $this->load->model('mdl_user');
    $query = $this->mdl_user->_custom_query($mysql_query);
    return $query;
  }

  public function _custom_num_rows_query($mysql_query)
  {
    $this->load->model('mdl_user');
    $query = $this->mdl_user->_custom_num_rows_query($mysql_query);
    return $query;
  }

  function fire_audit_log($user, $url, $auditdata, $action)
  {
    $session_id = session_id();
  if(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
  else
  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  }

  $sql = "insert into audit_trail ( sessionid, ipaddress, userid, urlaccessed, timeaccessed, auditdata, auditaction)
  values('".$session_id."', '".$ip_address."', '".$user."', '".$url."', CURRENT_TIMESTAMP, '".$auditdata."', '".$action."')";
  $this->_custom_query($sql);
}

}
