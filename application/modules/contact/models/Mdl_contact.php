<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Mdl_Contact extends CI_Model
{
    public function __construct() 
    {
        parent::__construct();
    }
      
    public function get_contact_table()
    {
      $table = "contact";
      return $table;
    }
    function _insert_contact($data)
    {
        $table = 'contact';
        $this->db->insert($table, $data);
    }

    public function _custom_query($mysql_query)
    {
        $query = $this->db->query($mysql_query);
        return $query;        
    }
}

?>