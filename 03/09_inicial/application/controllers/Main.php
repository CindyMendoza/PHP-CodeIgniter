<?php

class Main  extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('table');
        $this->load->helper('form');
    }

    public function index()
    {
        $data['error'] = FALSE;
        $data['uploaded_image_path'] = '';
        $data['loaded'] = FALSE;
        $this->load->view('index', $data);
    }

    public function do_upload()
    {

        $data['error'] = FALSE;
        $data['uploaded_image_path'] = '';
        $data['loaded'] = FALSE;
        $this->load->view('index', $data);

    }


}