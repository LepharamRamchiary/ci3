<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {
    public function index()
    {
        $arr['name'] = "Hi from controoler to view";
        $arr['names'] = array("isdnfksd", "sdjhgsjhgsj", "sdjgshjsgjs");
        $this->load->view('home', $arr);
    }
}