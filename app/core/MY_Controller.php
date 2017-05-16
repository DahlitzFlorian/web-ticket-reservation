<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *	Name: MY_Controller
 *	Type: Core
 *	
 *	@author Florian Dahlitz
 */
class MY_Controller extends CI_Controller 
{

	public function __construct()
	{
		parent::__construct();

		$this->config->load('general');
	}
}
