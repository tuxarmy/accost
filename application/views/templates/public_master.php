<?php defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/_parts/public_master_head');
$this->load->view('templates/_parts/public_master_header');
echo $view_content;
$this->load->view('templates/_parts/public_master_footer');
?>
