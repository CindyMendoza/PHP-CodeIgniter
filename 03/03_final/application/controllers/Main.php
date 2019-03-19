<?php

class Main  extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('table');
        $this->load->helper('form');
        $this->load->library('session');
        $this->user = $this->session->user ? $this->session->user : 'Invitado';
    }

    public function index()
    {
        $users[] = [0, 'Bernardo', 'Navarrete'];
        $users[] = [1, 'Sergio' , 'Aguayo'];
        $users[] = [2, 'Francisco', 'Madero'];
        $users[] = [3, 'Daniel', 'Prieto'];
        $users[] = [4, 'Violeta', 'Morado'];
        $users[] = [5, 'Marco', 'De la Rosa'];
        $data['users'] = $users;
        $this->load->view('index', $data);
    }

    public function select_user()
    {
        $this->session->user = $this->input->post('user');
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