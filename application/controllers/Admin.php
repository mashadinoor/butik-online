<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

  public function dashboard()
  {
    $this->load->view('backend/header_view');
    $this->load->view('backend/content/dashboard_view');
    $this->load->view('backend/footer_view');
  }
}
