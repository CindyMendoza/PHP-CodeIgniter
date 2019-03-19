<?php

class Person  extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('User');
    }

    public function index()
    {

        $users = $this->User->get_users();
        $data['users'] = $users;
        $this->load->view('index', $data);
    }

    public function details($user_id)
    {

        $user = $this->User->get_user_details($user_id);
        $data['user'] = $user->result_array();
        $this->load->view('details', $data);
    }

    public function modify($user_id)
    {
        redirect('person/index');
    }

    public function new_user()
    {
        $this->load->view('new');
    }

    public function add()
    {
        redirect('person/index');
    }

}