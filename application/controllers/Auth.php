<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

  public function login()
  {
    $this->load->view('frontend/header_view');
    $this->load->view('frontend/content/login_view');
    $this->load->view('frontend/footer_view');
  }

  public function register()
  {
    $this->load->view('frontend/header_view');
    $this->load->view('frontend/content/register_view');
    $this->load->view('frontend/footer_view');
  }
}
