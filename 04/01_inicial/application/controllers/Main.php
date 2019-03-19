<?php

class Main  extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('index');
    }

    public function contact()
    {
        $this->load->view('contact');
    }

}