<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends Admin_Controller {
	function __construct(){
		parent::__construct();
	}

	public function index($group_id = NULL){
		$this->data['page_title'] = 'Users';
		$this->data['users'] = $this->ion_auth->users()->result();
		$this->render('admin/users/list_users');
	}

	public function create(){
		$this->data['page_title'] = 'Create user';
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name','First name','trim');
		$this->form_validation->set_rules('last_name','Last name','trim');
		$this->form_validation->set_rules('company','Company','trim');
		$this->form_validation->set_rules('phone','Phone','trim');
		$this->form_validation->set_rules('username','Username','trim|required|is_unique[users.username]');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('password_confirm','Password confirmation','required|matches[password]');
		$this->form_validation->set_rules('groups[]','Groups','required|integer');

		if($this->form_validation->run()===FALSE){
			$this->data['groups'] = $this->ion_auth->groups()->result();
			$this->load->helper('form');
			$this->render('admin/users/create_user');
		}else{
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$group_ids = $this->input->post('groups');

			$additional_data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'company' => $this->input->post('company'),
				'phone' => $this->input->post('phone')
			);
			$this->ion_auth->register($username, $password, $email, $additional_data, $group_ids);
			$this->session->set_flashdata('message',$this->ion_auth->messages());
			redirect('admin/users','refresh');
		}
	}

	public function edit(){

	}

	public function delete(){

	}

}