<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Mdl_Permission extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function get_table()
  {
    $table = "permissions";
    return $table;
  }

  function _insert($data)
  {
    $table = $this->get_table();
    $this->db->insert($table, $data);
  }

  function _insert_permission_user($data)
  {
    $table = "permission_user";
    $this->db->insert($table, $data);
  }

  function _insert_permission_role($data)
  {
    $table = "permission_role";
    $this->db->insert($table, $data);
  }

  function _custom_num_rows_query($mysql_query)
  {
    $query = $this->db->query($mysql_query);
    $num_rows = $query->num_rows();
    return $num_rows;
  }

  function _custom_query($mysql_query)
  {
    $query = $this->db->query($mysql_query);
    return $query;
  }

  public function get_all_permission()
  {
    $query = $this->db->query('SELECT id, display_name, controller_name, action_name, discription, created_at FROM permissions')->result_array();
    $result = array(1 => $query);
    return $result;
  }

  public function get_all_roles()
  {
    $query = $this->db->query('SELECT id, name, display_name, created_at, updated_at FROM roles where id <> 1 and id <> 2')->result_array();
    $result = array(1 => $query);
    return $result;
  }

  public function get_all_users()
  {
    $query = $this->db->query('SELECT id, user_code, name, email, user_type, created_at FROM users where admin=0')->result_array();
    $result = array(1 => $query);
    return $result;
  }

  public function get_unique_controller()
  {
    $query = $this->db->query("select distinct controller_name from permissions")->result_array();
    $result = array(1=>$query);
    return $result;
  }

  public function get_unique_action()
  {
    $query = $this->db->query("select distinct action_name from permissions")->result_array();
    $result = array(1=>$query);
    return $result;
  }



}
