<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Shop extends CI_Controller
{

  public function index()
  {
    $this->load->view('frontend/header_view');
    $this->load->view('content/shop_view');
    $this->load->view('frontend/footer_view');
  }

  public function product()
  {
    $this->load->view('frontend/header_view');
    $this->load->view('content/product_view');
    $this->load->view('frontend/footer_view');
  }

  public function tops()
  {
    $this->load->view('frontend/header_view');
    $this->load->view('content/shop_tops_view');
    $this->load->view('frontend/footer_view');
  }
}
