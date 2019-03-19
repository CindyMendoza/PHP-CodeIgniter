<?php

/**
 * Created by PhpStorm.
 *
 *
 *
 */
class Person  extends CI_Controller {
    public function index()
    {
        $this->load->model('User');
        $users = $this->User->get_users();
        $data['users'] = $users;
        $this->load->view('index', $data);
    }
}