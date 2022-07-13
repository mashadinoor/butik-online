<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaction extends CI_Controller
{

  public function active()
  {
    $this->load->view('backend/header_view');
    $this->load->view('backend/content/transaction_active_view');
    $this->load->view('backend/footer_view');
  }

  public function pending()
  {
    $this->load->view('backend/header_view');
    $this->load->view('backend/content/transaction_pending_view');
    $this->load->view('backend/footer_view');
  }

  public function history()
  {
    $this->load->view('backend/header_view');
    $this->load->view('backend/content/transaction_history_view');
    $this->load->view('backend/footer_view');
  }
}
