<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

  public function add()
  {
    $this->load->view('backend/header_view');
    $this->load->view('backend/content/product_add_view');
    $this->load->view('backend/footer_view');
  }


  public function list()
  {
    $this->load->view('backend/header_view');
    $this->load->view('backend/content/product_list_view');
    $this->load->view('backend/footer_view');
  }

  public function stock()
  {
    $this->load->view('backend/header_view');
    $this->load->view('backend/content/product_stock_view');
    $this->load->view('backend/footer_view');
  }
}
