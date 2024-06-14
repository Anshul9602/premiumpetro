<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clients extends CI_Controller {

    public function index()
	{
        if ($this->session->userdata('username') == null)
        {
            redirect(base_url() . 'Admin');
        }
        $this->load->model('Admin_model');
        if(empty($_GET))
        {
            $data = array();
            $data['cdata'] = $this->Admin_model->get_clients($data);
        }
        else{
            $data['cdata'] = $this->Admin_model->get_clients($_GET);
        }
        
        $this->load->view("header");
        $this->load->view("clients",$data);
        $this->load->view("footer");

    }

}


