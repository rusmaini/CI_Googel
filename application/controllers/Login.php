<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
		$this->load->Model('Mldap');
	}
	
	function index()
	{
		$data 				= $this->data;
		$theme 				= $data['theme'];
		$data['page_title'] = 'Login';
		$data['content'] 	= $theme.'/login/index';
		
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');
		
		if ($this->form_validation->run() == FALSE):
			$this->load->view($theme.'/template/login',$data);
		else:
		
				
			//notification
			if($is_logged_in==true):
				redirect('');
			else:
				$this->session->set_flashdata('notis','<p class="alert alert-danger mb-4">The username and password you entered did not match our records. Please double-check and try again.</p>');
				redirect('login');
			endif;
		
		endif;
	}
	
}
