<?php

class Main  extends CI_Controller {

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->_load_layout('index');
    }

    public function contact()
    {
        $this->_load_layout('contact');
    }

    function _load_layout($template)
    {

        $this->load->view('layout/header');
        $this->load->view($template);
        $this->load->view('layout/footer');

    }

}