<?php

/**
 * Created by PhpStorm.
 * User: trainer
 * Date: 03/11/2015
 * Time: 19:29
 */
class User extends CI_Model
{

    function get_user_details($user_id)
    {
        $where['id'] = $user_id;
        return $this->db->get_where('user', $where);
    }

}