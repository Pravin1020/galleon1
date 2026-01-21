<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

public function login(){
		$data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
		$result = $this->auth->login($data);
		
		if($result){
			$this->session->set_userdata('admin_id', $result->id);
            $this->session->set_userdata('admin_name', $result->name);
            $this->session->set_userdata('is_login', true);
            redirect('admin/admin_dashboard');
        }else{
			$this->session->set_flashdata('error', 'Invalid Username or Password');
			redirect('admin/login');
		}
	}

}
