<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	protected $data = array();
	function __construct(){
		parent::__construct();
		
		$this->load->library('ion_auth');
		$this->data['page_title'] = 'Accost';
	}

	protected function render($view = NULL, $template = 'master'){
		if ($template == 'json' || $this->input->is_ajax_request()) {
			header('Content-Type: application/json');
			echo json_encode($this->data);
		}else{
			$this->data['view_content'] = (is_null($view)) ? '' : $this->load->view($view, $this->data, TRUE);
			$this->load->view('templates/'. $template, $this->data);	
		}
	}
}

class Admin_Controller extends MY_Controller {
	function __construct(){
		parent::__construct();
		
		if (!$this->ion_auth->logged_in()){
			redirect('login', 'refresh');
		}
		$this->data['current_user'] = $this->ion_auth->user()->row();
		$this->data['page_title'] = 'Accost - Dashboard';
	}

	protected function render($view = NULL, $template = 'admin_master'){
		parent::render($view, $template);
	}
}

class Public_Controller extends MY_Controller {
	function __construct(){
		parent::__construct();
		$this->data['page_title'] = 'Accost - Dashboard';
	}
	protected function render($view = NULL, $template = 'public_master'){
		parent::render($view, $template);
	}
}