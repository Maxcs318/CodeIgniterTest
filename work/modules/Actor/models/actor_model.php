<?php

    class Actor_model extends CI_Model
    {
        public function get_all_member()
        {
            $query=$this->db->get('member');
            return $query->result();
        }

        public function get_my_id()
        {
            $this->db->where('m_id', $_SESSION['id']);
            $query=$this->db->get('member');
            return $query->result();
        }

        public function edit_my_id($my_id)
        { 
            $this->db->where('m_id', $_SESSION['id']);
            $this->db->update('member', $my_id);
        }

        public function delete_member($id)
        {
            $this->db->where('m_id', $id);
            $this->db->delete('member');
        }
    }
?>