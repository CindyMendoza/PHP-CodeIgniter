<?php

class Home  extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('Customlibrary');
    }

    public function index()
    {

        $this->load->view('index');
    }

    public function second_page()
    {
        $this->load->view('second_page');
    }

}