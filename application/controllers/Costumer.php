<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Costumer extends CI_Controller
{

  public function list()
  {
    $this->load->view('backend/header_view');
    $this->load->view('backend/content/costumer_list_view');
    $this->load->view('backend/footer_view');
  }

  public function advice()
  {
    $this->load->view('backend/header_view');
    $this->load->view('backend/content/costumer_advice_view');
    $this->load->view('backend/footer_view');
  }
}
