<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('model');
    $this->load->model('m_tabel_ss');
    $this->load->library('pdf');
  }
  
 
  function index(){
    // print_r("sini dia");
    $this->load->view('home/index');
  }

 
  
}
