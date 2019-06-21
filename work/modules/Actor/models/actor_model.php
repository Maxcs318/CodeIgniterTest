<?php

    class Actor_model extends CI_Model
    {
        public function get_all_member()
        {
            $query=$this->db->get('member');
            return $query->result();
        }


    }
?>