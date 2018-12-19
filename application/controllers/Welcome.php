<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('is_logged_in')) redirect('login');
		
	}
	
	function index()
	{
		$data 				= $this->data;
		$theme 				= $data['theme'];
		$data['page_title'] = 'Welcome';
		$data['content'] 	= $theme.'/welcome/index';
		$this->load->view($theme.'/template/index',$data);
	}
}
