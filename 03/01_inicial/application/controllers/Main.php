<?php

class Main  extends CI_Controller {

    function __construct()
    {
        parent::__construct();

    }

    public function form()
    {

        $data = [];
        $data['success'] = FALSE;
        $this->_load_layout('form', $data);
    }

    public function process_form()
    {

        $data = [];
        $data['languages'] = $this->languages;
        $data['success'] = FALSE;


        $this->_load_layout('form', $data);

    }


    function _load_layout($template, $data = '')
    {

        $this->load->view('layout/header');
        $this->load->view($template,$data);
        $this->load->view('layout/footer');

    }

}