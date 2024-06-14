<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{


	public function index()
	{
		$this->load->model('Admin_model');
		$data['posts'] = $this->Admin_model->get_posts();

		$data['pricefile'] = $this->Admin_model->get_pricefile();
		$data['pricefile'] = $data['pricefile'][0];
		$data['meta'] = $this->Admin_model->get_meta_data("blog");
		$this->load->view('header', $data);
		$temp = [];
		foreach ($data['posts'] as $p) {
			$p['url'] = $p['heading'];
			$p['url'] = str_replace(' ', '-', $p['url']); // Replaces all spaces with hyphens.

			$p['url'] = preg_replace('/[^A-Za-z0-9\-]/', '', $p['url']); // Removes special chars.
			$p['url'] = strtolower($p['url']);
			$temp[] = $p;
		}
		$data['posts'] = $temp;
		$this->load->view('blog', $data);
		$this->load->view('footer');
	}

	public function post($heading = "")
	{
		if ((!isset($_GET['id']) || $_GET['id'] == '') && $heading == "") {
			redirect(base_url() . 'blog');
		}
		$this->load->model('Admin_model');

		
		

		$post = [];
		if ($heading != "") {
			$posts = $this->Admin_model->get_posts();
			foreach ($posts as $p) {
				$temp = $p['heading'];
				$p['heading'] = str_replace(' ', '-', $p['heading']); // Replaces all spaces with hyphens.

				$p['heading'] = preg_replace('/[^A-Za-z0-9\-]/', '', $p['heading']); // Removes special chars.
				$p['heading'] = strtolower($p['heading']);
				if ($p['heading'] == $heading) {
					$p['heading'] = $temp;
					$post[] = $p;
					break;
				}
			}
		} else {
			$post = $this->Admin_model->get_post($_GET['id']);
		}
		if (sizeof($post) == 0) {
			redirect(base_url() . 'blog');
		}


if ($post[0]['id'] == '18') {

			$data['cad'] = 0;
		}else{
			$data['cad'] = 1;
		}

		$data['post'] = $post[0];

		$data['pricefile'] = $this->Admin_model->get_pricefile();
		$data['pricefile'] = $data['pricefile'][0];


		$this->load->view('post', $data);
		$this->load->view('footer');
	}
}
