<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Privacy extends CI_Controller
{


	public function index()
	{

		
		$this->load->view('header');
		$this->load->view('privacy');
		$this->load->view('footer');
	}
}


