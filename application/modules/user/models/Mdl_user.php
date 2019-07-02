<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Mdl_User extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  function get_table()
  {
    $table = "users";
    return $table;
  }

  function _insert($data)
  {
    $table = $this->get_table();
    $this->db->insert($table, $data);
  }

  function _insert_station_user($data)
  {
    $table = "station_user";
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

  public function get_all_stations()
  {
    $query = $this->db->query('SELECT id, station_name FROM stations')->result_array();
    $result = array(1 => $query);
    return $result;
  }

  public function get_all_users()
  {
    $query = $this->db->query('SELECT id, user_code, name, email, user_type, created_at FROM users where admin=0')->result_array();
    $result = array(1 => $query);
    return $result;
  }

}
