<?php

    class Register_model extends CI_Model
    {
        
        public function insert_member($new_member)
        {
            $this->db->insert('member',$new_member);
            return true;
        }


    }
?>