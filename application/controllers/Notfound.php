<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Notfound extends CI_Controller
{
    function index()
    {
        redirect(base_url());
    }
}
