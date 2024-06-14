<?php  
 defined('BASEPATH') OR exit('No direct script access allowed');  
 class Login extends CI_Controller {  
      //functions  
      function index()  
      {  
            //if($this->session->userdata('username') != null)
            //{
            //    redirect(base_url() . 'Dashboard');
            //}
           $this->load->library('form_validation');  
           $this->form_validation->set_rules('username', 'Username', 'required');  
           $this->form_validation->set_rules('password', 'Password', 'required');  
           if($this->form_validation->run())  
           {  
                //true  
                $username = $this->input->post('username');  
                $password = $this->input->post('password');  
                //model function  
                $this->load->model('Admin_model');  
                if($this->Admin_model->can_client_login($username, $password))  
                {  
                     $session_data = array(  
                          'username'     =>     $username
                     );  
                     $this->session->set_userdata($session_data);  
                     redirect(base_url() . 'Clients');  
                }  
                else  
                {  
                     $this->session->set_flashdata('error', 'Invalid Username and Password');  
                     redirect(base_url() . 'Login');  
                }  
           }

           $this->load->view("header");
           $this->load->view("login");
           $this->load->view("footer"); 
      }

      function logout()  
      {  
           $this->session->unset_userdata('username');  
           redirect(base_url() . 'login');
      }
 }
?>