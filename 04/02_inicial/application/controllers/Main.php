<?php

class Main  extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->logged_in = FALSE;
    }

    public function index()
    {
        $this->_load_layout('index');
    }

    public function login()
    {
        $data['login_failed'] = FALSE;
        $this->_load_layout('login');
    }

    public function login_action()
    {

    }

    public function restricted_page()
    {
        
        $this->_load_layout('restricted_page');
    }

    function _load_layout($template, $data = '')
    {

        $this->load->view('layout/header');
        $this->load->view($template,$data);
        $this->load->view('layout/footer');

    }

}