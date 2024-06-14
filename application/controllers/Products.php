<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{


	public function index()
	{
		$this->load->model('Admin_model');
		$data['pricefile'] = $this->Admin_model->get_pricefile();
		$data['pricefile'] = $data['pricefile'][0];
		$data['meta'] = $this->Admin_model->get_meta_data("products");
		$this->load->view('header', $data);
		$this->load->view('products');
		$this->load->view('footer');
	}

	public function vg10()
	{
		$this->load->model('Admin_model');
		$data['pricefile'] = $this->Admin_model->get_pricefile();
		$data['pricefile'] = $data['pricefile'][0];
		$this->load->view('products/vg10', $data);
		$this->load->view('footer');
	}

	public function vg30()
	{
		$this->load->model('Admin_model');
		$data['pricefile'] = $this->Admin_model->get_pricefile();
		$data['pricefile'] = $data['pricefile'][0];
		$this->load->view('products/vg30', $data);
		$this->load->view('footer');
	}

	public function vg40()
	{
		$this->load->model('Admin_model');
		$data['pricefile'] = $this->Admin_model->get_pricefile();
		$data['pricefile'] = $data['pricefile'][0];
		$this->load->view('products/vg40', $data);
		$this->load->view('footer');
	}

	public function pmb()
	{
		$this->load->model('Admin_model');
		$data['pricefile'] = $this->Admin_model->get_pricefile();
		$data['pricefile'] = $data['pricefile'][0];
		$this->load->view('products/pmb', $data);
		$this->load->view('footer');
	}

	public function crmb()
	{
		$this->load->model('Admin_model');
		$data['pricefile'] = $this->Admin_model->get_pricefile();
		$data['pricefile'] = $data['pricefile'][0];
		$this->load->view('products/crmb', $data);
		$this->load->view('footer');
	}
	
	public function bitumen()
	{
		$this->load->model('Admin_model');
		$data['pricefile'] = $this->Admin_model->get_pricefile();
		$data['pricefile'] = $data['pricefile'][0];
		$this->load->view('products/bitumen', $data);
		$this->load->view('footer');
	}
}
