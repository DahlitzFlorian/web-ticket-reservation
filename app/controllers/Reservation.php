<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *	Name: Reservation
 *	Type: Controller
 *	Description: Representing the reservation form of this system
 *  			 accessable by everyone
 *	
 *	@author Florian Dahlitz
 */
class Reservation extends MY_Controller 
{

	public function index()
	{
		$this->load->view('reservation');
	}
}
