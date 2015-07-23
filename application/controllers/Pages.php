<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends Public_Controller {
	public function index(){
		$this->load->helper('form');
		$this->render('public/homepage');
	}

	public function register(){
		$this->load->helper('form');
		$this->render('public/register');
	}

	public function login(){
		$this->data['page_title'] = 'Login';
		if($this->input->post()){
			$this->load->library('form_validation');
			$this->form_validation->set_rules('identity', 'Identity', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('remember','Remember me','integer');
			
			if($this->form_validation->run()===TRUE){
				$remember = (bool) $this->input->post('remember');
				if ($this->ion_auth->login($this->input->post('identity'), $this->input->post('password'), $remember)){
					if ($this->ion_auth->is_admin()) {
						redirect('dashboard', 'refresh');
					}else{
						redirect('', 'refresh');
					}
				}else{
					$this->session->set_flashdata('message',$this->ion_auth->errors());
					redirect('login', 'refresh');
				}
			}
		}
		$this->load->helper('form');
		$this->render('public/login');
	}

	public function logout(){
		$this->ion_auth->logout();
		redirect('login', 'refresh');
	}
}