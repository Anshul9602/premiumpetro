<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prices extends CI_Controller
{


	public function index()
	{
		$s = current_url();
		str_replace(base_url(), "", $s);
		$a = explode("/", $s);
		if (end($a) == "prices" || end($a) == "Prices") {
			redirect(base_url() . 'today-bitumen-prices-in-india');
		}
		$this->load->model('Admin_model');
		$data['rates'] = $this->Admin_model->get_rates();
		$data['pricefile'] = $this->Admin_model->get_pricefile();
		$data['pricefile'] = $data['pricefile'][0];
		$data['meta'] = $this->Admin_model->get_meta_data("prices");
		$data['pricedate'] = $this->Admin_model->get_pricedate();
		$data['pricedate'] = $data['pricedate'][0];
		$this->load->view('header', $data);
		$this->load->view('price', $data);
		$this->load->view('footer');
	}
}
