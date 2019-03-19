<?php

class Main  extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
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
        $data['success'] = FALSE;

        $this->form_validation->set_error_delimiters('','');
        $this->form_validation->set_rules('name','nombre','required');
        $this->form_validation->set_rules('email','correo','trim|required|valid_email');

        if( $this->form_validation->run() )
        {
            $data['success'] = TRUE;
        }

        $this->_load_layout('form', $data);

    }


    function _load_layout($template, $data = '')
    {

        $this->load->view('layout/header');
        $this->load->view($template,$data);
        $this->load->view('layout/footer');

    }

}