<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signout extends MY_Controller{
	
	function __construct()
	{
		parent::__construct();
	}
	
	function index()
	{
		$data = $this->data;
		
		$this->session->unset_userdata('is_logged_in');
		$this->session->sess_destroy();
		
		redirect('login','refresh');
	}	
}
