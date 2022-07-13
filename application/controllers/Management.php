<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Management extends CI_Controller
{

  public function create()
  {
    $this->load->view('backend/header_view');
    $this->load->view('backend/content/management_create_view');
    $this->load->view('backend/footer_view');
  }

  public function edit()
  {
    $this->load->view('backend/header_view');
    $this->load->view('backend/content/management_list_view');
    $this->load->view('backend/footer_view');
  }
}
