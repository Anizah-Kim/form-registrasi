<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    function _construct(){
        parent: :_construct();
        $this->load->helper('url');
    }

    public function index(){
        $this->load->view('addform.php');
    }
}

?>