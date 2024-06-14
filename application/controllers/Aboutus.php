<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aboutus extends CI_Controller
{


	public function index()
	{

		$this->load->model('Admin_model');
		$data['pricefile'] = $this->Admin_model->get_pricefile();
		$data['pricefile'] = $data['pricefile'][0];
		$data['meta'] = $this->Admin_model->get_meta_data("aboutus");
		$this->load->view('header', $data);
		$this->load->view('about');
		$this->load->view('footer');
	}
}
