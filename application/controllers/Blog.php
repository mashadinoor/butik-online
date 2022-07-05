<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

  public function index()
  {
    $this->load->view('frontend/header_view');
    $this->load->view('frontend/content/blog_view');
    $this->load->view('frontend/footer_view');
  }

  public function article()
  {
    $this->load->view('frontend/header_view');
    $this->load->view('frontend/content/article_view');
    $this->load->view('frontend/footer_view');
  }
}
