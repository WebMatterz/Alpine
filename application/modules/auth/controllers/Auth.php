<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends MX_Controller {

  public function __contruct()
  {
    parent::__contruct();
    $this->load->library('Form_validation');
  }
  function loadView($data)
  {
    $data['module'] = 'auth';
    echo Modules::run('templ/homeContent', $data);
  }
  public function index()
  {
    if(isset($_SESSION['username'])) {
      redirect('/dashboard/');
    }
    else {
      $data['title'] = 'Authentication System - Alpine';
      $data['view_file'] = 'login';
      $this->loadView($data);
    }
  }

  public function login()
  {
    $rules = $this->form_validation;
    $rules->set_rules('username', 'Username', 'required|trim');
    $rules->set_rules('password', 'Password', 'required|trim');

    $allvalues = $this->check_user(strtolower($_POST['username']));

    if(is_null($allvalues))
    {
      redirect('auth');
    }
    else{
      $vals = explode("_", $allvalues);
      $id = $vals[0];
      $usercode = $vals[1];
      $username = $vals[2];
      $fullname = $vals[3];
      $email = $vals[4];
      $usertype = $vals[5];

      // Do the Login
      if ($rules->run())
      {
        $lgprocess = $this->loginprocess(strtolower($rules->set_value('username')), $rules->set_value('password'));
      }
      else
      {
        // Login failed
        $this->load->view('login', array('msg' => '<div class="alert alert-danger"><i class="fa fa-warning"></i> Error, Login failed.</div>'));
      }

    }

  }
  public function loginprocess($username, $password)
  {
      $allvalues = $this->check_user($username);
      
    if (!is_null($allvalues))
    {
      $vals = explode("_", $allvalues);
      $id = $vals[0];
      $usercode = $vals[1];
      $username = $vals[2];
      $fullname = $vals[3];
      $email = $vals[4];
      $usertype = $vals[5];
      $created_at = $vals[6];
    }

      if($this->validate_credential(strtolower(addslashes($_POST['username'])), addslashes($_POST['password'])) == true)
      {
        $this->lock_session($username);
        $session_data = array(
        'usercode' => $usercode,
        'email' => $email,
        'username' => $username,
        'usertype' => $usertype,
        'created_at' => $created_at,
      ); 

        $this->session->set_userdata('logged_in', $session_data);
        redirect('/dashboard');
      }
    }


  public function check_user($email)
  {
    $query = $this->_custom_query("select id, usercode, username, fullname, email, usertype, created_at from users
      where email = '$email'")->result_array();


    if (count($query) > 0)
    {
      foreach ($query as $row)
      {
        $id = $row['id'];
        $usercode = $row['usercode'];
        $username = $row['username'];
        $fullname = $row['fullname'];
        $email = $row['email'];
        $usertype = $row['usertype'];
        $created_at = $row['created_at'];
      }
      return $id . '_' . $usercode . '_' . $username . '_' . $fullname .'_' . $email.'_'.$usertype.'_'.$created_at;
    }
    else
    {
      return NULL;
    }
  }

  public function validate_credential($user, $pass)
  {
    $hashed_password = md5($pass);

      $count = $this->_custom_num_rows_query("select * from users where email = '$user' and hashpass='$hashed_password'");
      if($count == 1) {
        return true;
      }
      else {
        return false;
      }    
  }

    public function lock_session($usr)
    {
      $query = "INSERT INTO session_lock(email, logged_time) VALUES('".$usr."', sysdate())";
      $this->_custom_query($query);
    }

    function unlock_session($usr)
    {
      $query = "DELETE FROM session_lock WHERE email = '".$usr."'";
      $this->_custom_query($query);
    }    

    public function logout()
    {
      $check_code = $_SESSION['usercode'];

      $user = $_SESSION['username'];

      // unlock user session
      $this->unlock_session($user);
      session_destroy();
      redirect('/auth');
    }    

  public function _custom_num_rows_query($mysql_query)
  {
    $this->load->model('mdl_auth');
    $query = $this->mdl_auth->_custom_num_rows_query($mysql_query);
    return $query;
  }

  public function _custom_query($mysql_query)
  {
    $this->load->model('mdl_auth');
    $query = $this->mdl_auth->_custom_query($mysql_query);
    return $query;
  }

}
