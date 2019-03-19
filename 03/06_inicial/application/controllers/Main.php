<?php

class Main  extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('table');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->library('calendar');
        $this->language = $this->session->language ? $this->session->language : 'english';

    }

    public function index()
    {
        $language[] = 'english';
        $language[] = 'spanish';
        $language[] = 'french';
        $language[] = 'arabic';
        $data['languages'] = $language;
        $this->load->view('index', $data);
    }

    public function select_user()
    {
        $this->session->language = $this->input->post('language');
        redirect('main');
    }

    public function page2()
    {
        $this->load->view('page2');
    }

    public function page3()
    {
        $this->load->view('page3');
    }

}