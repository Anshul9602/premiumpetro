<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{


	public function index()
	{

		$this->load->model('Admin_model');
		$data['posts'] = $this->Admin_model->get_posts();

		$data['pricefile'] = $this->Admin_model->get_pricefile();
		$data['pricefile'] = $data['pricefile'][0];
		$data['meta'] = $this->Admin_model->get_meta_data("home");

		$temp = [];
		foreach ($data['posts'] as $p) {
			$p['url'] = $p['heading'];
			$p['url'] = str_replace(' ', '-', $p['url']); // Replaces all spaces with hyphens.

			$p['url'] = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '', $p['url'])); // Removes special chars.
			$p['url'] = strtolower($p['url']);
			$temp[] = $p;
		}
		$data['posts'] = $temp;
		$this->load->view('header', $data);
		$this->load->view('home', $data);
		$this->load->view('footer');
	
		
	}
}
