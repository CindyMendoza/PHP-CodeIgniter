<?php

class Person  extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('User');
    }

    public function index($user_id)
    {

        $users =$this->User->get_user_details($user_id);
        $data['users'] = $users;
        $this->load->view('index', $data);
    }
}