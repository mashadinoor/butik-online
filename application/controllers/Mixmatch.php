<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mixmatch extends CI_Controller
{

  public function index()
  {
    $this->load->view('frontend/header_view');
    $this->load->view('content/mixmatch_view');
    $this->load->view('frontend/footer_view');
  }
}
