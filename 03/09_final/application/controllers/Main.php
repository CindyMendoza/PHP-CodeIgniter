<?php

class Main  extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('table');
        $this->load->helper(['form']);
    }

    public function index()
    {
        $data['error'] = FALSE;
        $data['uploaded_image_path'] = '';
        $data['loaded'] = FALSE;
        $this->load->view('index', $data);
    }

    public function do_upload()
    {

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $this->load->library('upload', $config);

        if( ! $this->upload->do_upload('profile') )
        {
            $data['error'] = $this->upload->display_errors('','');
            $data['generated_table'] = 'Error';
            $data['loaded'] = FALSE;
        }else
        {
            $data['upload_data'] = $this->upload->data();
            $data['generated_table'] = 'Carga correcta';
            $data['loaded'] = TRUE;
            $data['error'] = FALSE;
            $data['uploaded_image_path'] = $this->upload->data('file_name');
        }

        $this->load->view('index', $data);
    }


}