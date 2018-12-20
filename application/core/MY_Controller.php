<?php

class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		//global
		$this->data = array(
            'site_name' 		=> 'CI Login',
            'site_slogan' 		=> 'Sign in with google',
            'company' 			=> 'crockcms',
            'per_page' 			=> '20',
            'contact_email' 	=> 'crockcms@gmail.com',
			'theme'				=> 'aside',
			'url_foto'			=> 'https://picsum.photos/200/300/?random',
			'footer'			=> '&copy; 2018 Crockcms. All rights reserved.'
        );
	}
	
}

