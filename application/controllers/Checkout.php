<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{

  public function index()
  {
    $this->load->view('frontend/header_view');
    $this->load->view('content/checkout_view');
    $this->load->view('frontend/footer_view');
  }
}
