<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

  public function index()
  {
    $this->load->view('frontend/header_view');
    $this->load->view('content/home_view');
    $this->load->view('frontend/footer_view');
  }
}
