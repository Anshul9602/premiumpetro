<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post extends CI_Controller
{


	public function index()
	{
		if (!isset($_GET['id']) || $_GET['id'] == '') {
			redirect(base_url() . 'Blogs');
		}
		$this->load->model('Admin_model');
echo $_GET['id'];
die;
if ($_GET['id'] == '18') {
	$data['cad'] = 0;
}else{
	$data['cad'] = 1;
}

		$data['post'] = $this->Admin_model->get_post($_GET['id']);
		$data['post'] = $data['post'][0];

		$data['pricefile'] = $this->Admin_model->get_pricefile();
		$data['pricefile'] = $data['pricefile'][0];


		$this->load->view('post', $data);
		$this->load->view('footer');
	}
}
