<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Mdl_Auth extends CI_Model {

  function __construct() {
    parent::__construct();
    $this->load->database();
  }

  function get_table()
  {
    $table = "users";
    return $table;
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
}