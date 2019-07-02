<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Templ extends MX_Controller {

    public function homeContent($data) {
        $this->load->view('index', $data);
    }       
    public function templContent($data) {
        $this->load->view('myview', $data);
    }

    public function dashContent($data) {
        $this->load->view('dashboard', $data);
    } 
       	
	public function printerContent($data) {
        $this->load->view('printerview', $data);
    }
}

?>