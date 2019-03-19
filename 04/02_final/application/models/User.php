<?php


class User extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_user_data($email)
    {
        $where['email'] = $email;
        $query = $this->user->db->get_where('user_access',$where,1);
        if( $this->db->count_all_results() )
            return $query->result();
        return FALSE;
    }

}