<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	public function profile(){
		$this->data['page_title'] = 'Public Profile';
		$user = $this->ion_auth->user()->row();
		$this->data['user'] = $user;
		$this->data['current_user_menu'] = '';
		if($this->ion_auth->in_group('admin')){
			$this->data['current_user_menu'] = $this->load->view('templates/_parts/user_menu_admin.php', NULL, TRUE);
		}

		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name','First name','trim');
		$this->form_validation->set_rules('last_name','Last name','trim');
		$this->form_validation->set_rules('company','Company','trim');
		$this->form_validation->set_rules('phone','Phone','trim');

		if($this->form_validation->run()===FALSE){
			$this->render('dashboard/user/profile','dashboard_master');
		}else{
			$new_data = array(
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'company' => $this->input->post('company'),
				'phone' => $this->input->post('phone')
			);
			if(strlen($this->input->post('password'))>=6) $new_data['password'] = $this->input->post('password');

			$this->ion_auth->update($user->id, $new_data);

			$this->session->set_flashdata('message', $this->ion_auth->messages());
			redirect('dashboard/user/profile','refresh');
		}
	}
}