<?php
class users_model extends CI_Model
{

    public function get_users()
    {
        return $this->db->get("users");
    }
}