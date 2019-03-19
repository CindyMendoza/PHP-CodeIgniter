<?php

class Main  extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->logged_in = $this->session->logged_in ? TRUE : FALSE ;
        $this->load->model('user');
    }

    public function index()
    {
        $this->_load_layout('index');
    }

    public function login()
    {
        $data['login_failed'] = FALSE;
        $this->_load_layout('login', $data);

    }

    public function login_action()
    {
        $user_data = $this->user->get_user_data($this->input->post('email'));
        $password = $user_data ? $user_data[0]->password : '';

        if( password_verify( $this->input->post('password'),$password  ) )
        {
            $this->session->logged_in = TRUE;
            redirect('main/restricted_page');
        }else
        {
            $data['login_failed'] = TRUE;
            $this->_load_layout('login', $data);
        }
    }

    public function restricted_page()
    {
        if( !$this->logged_in )
        {
            redirect('main/login');
        }
        $this->_load_layout('restricted_page');
    }

    function _load_layout($template, $data = '')
    {

        $this->load->view('layout/header');
        $this->load->view($template,$data);
        $this->load->view('layout/footer');

    }

}