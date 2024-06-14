<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Thankyou extends CI_Controller
{


    public function index()
    {
        if (empty($_POST)) {
            redirect(base_url());
        }

        // Storing google recaptcha response
        // in $recaptcha variable



        $recaptcha = $_POST['g-recaptcha-response'];

        if (!isset($_POST['g-recaptcha-response'])) {
            $this->load->model('Admin_model');
            $data['pricefile'] = $this->Admin_model->get_pricefile();
            $data['pricefile'] = $data['pricefile'][0];
            $data['meta'] = $this->Admin_model->get_meta_data("thankyou");
            $data['captcha_error'] = "Please fill the captcha";

            $this->load->view('header', $data);
            $this->load->view('home');
            $this->load->view('footer', $data);
        }


        // Put secret key here, which we get
        // from google console
        $secret_key = '6LctaaUeAAAAACvIjh2KNZxNnWxpjwdB2sPfI_C0';

        $url = 'https://www.google.com/recaptcha/api/siteverify?secret='
            . $secret_key . '&response=' . $recaptcha;

        // Making request to verify captcha
        $response = file_get_contents($url);

        // Response return by google is in
        // JSON format, so we have to parse
        // that json
        $response = json_decode($response);

        // Checking, if response is true or not
        if ($response->success != true) {
            $this->load->model('Admin_model');
            $data['pricefile'] = $this->Admin_model->get_pricefile();
            $data['pricefile'] = $data['pricefile'][0];
            $data['meta'] = $this->Admin_model->get_meta_data("thankyou");
            $data['captcha_error'] = "Invalid captcha";

            $this->load->view('header', $data);
            $this->load->view('home');
            $this->load->view('footer', $data);
        }

        $this->load->library('email');

        $config['protocol']    = 'smtp';
        $config['smtp_host']    = 'ssl://smtp.gmail.com';
        $config['smtp_port']    = '465';
        $config['smtp_timeout'] = '7';
        $config['smtp_user']    = 'theodinjaipur@gmail.com';
        $config['smtp_pass']    = 'giiisotzzrehlrqi';
        $config['charset']    = 'utf-8';
        $config['newline']    = "\r\n";
        $config['mailtype'] = 'html'; // or html
        $config['validation'] = TRUE; // bool whether to validate email or not

        $this->email->initialize($config);

        $from = 'theodinjaipur@gmail.com';
        $to = 'contactus@premiumpetro.in';

        $subject = 'New Message';
        $message = '';
        unset($_POST['g-recaptcha-response']);

        foreach ($_POST as $key => $value) {
            $message = $message . $key . '- ' . $value . '<br>';
        }



        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        $this->email->send();

        $this->load->model('Admin_model');
        $data['pricefile'] = $this->Admin_model->get_pricefile();
        $data['meta'] = $this->Admin_model->get_meta_data("thankyou");
        $data['pricefile'] = $data['pricefile'][0];

        $this->load->view('header', $data);
        $this->load->view('thankyou');
        $this->load->view('footer');
    }
}
