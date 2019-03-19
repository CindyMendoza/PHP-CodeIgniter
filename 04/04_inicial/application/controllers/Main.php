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
        $data['success'] = FALSE;
        $this->_load_layout('form', $data);

    }

    public function modify_article()
    {

    }

    public function add_article()
    {

    }

    public function get_articles()
    {
        $this->load->view('get_articles');
    }


    function _load_layout($template, $data = '')
    {

        $this->load->view('layout/header');
        $this->load->view($template,$data);
        $this->load->view('layout/footer');

    }

}