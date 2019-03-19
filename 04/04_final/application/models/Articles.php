<?php

class Articles extends CI_Model {


    public function __construct()
    {
        parent::__construct();
    }

    public function get_all()
    {
        $query = $this->db->get('articles');
        return $query;
    }

    public function add($title, $article)
    {
        $data['title'] = $title;
        $data['article'] = $article;

        $this->db->insert('articles', $data);
    }

    public function update($id, $title,$article)
    {
        $new_data['title'] = $title;
        $new_data['article'] = $article;
        $where['id'] = $id;

        $this->db->update('articles',$new_data, $where);
    }

}