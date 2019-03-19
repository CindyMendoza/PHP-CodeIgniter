<?php

class Main  extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('articles');
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
        $id = $this->input->post('id');
        $title = $this->input->post('title');
        $article = $this->input->post('article');
        $this->articles->update($id, $title,$article);
    }

    public function add_article()
    {
        $title = $this->input->post('title');
        $article = $this->input->post('article');
        $this->articles->add($title, $article);
    }

    public function get_articles()
    {
        $data['articles']  = $this->articles->get_all();
        $this->load->view('get_articles', $data);
    }


    function _load_layout($template, $data = '')
    {

        $this->load->view('layout/header');
        $this->load->view($template,$data);
        $this->load->view('layout/footer');

    }

}