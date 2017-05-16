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

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('form');
	}

	public function index()
	{
		$this->data['tour_dates'] = [1,2];

		$this->load->view('reservation', $this->data);
	}
}
