<?php

    class Welcome_model extends CI_Model
    {
        
        public function check_User($username,$password)
        {
            $this->db->where('m_username',$username);
			$this->db->where('m_password',$password);
            $query = $this->db->get('member');
            if($query->result()>0){
				foreach ($query->result() as $row)
				{
					$_SESSION['id']=$row->m_id;
					$_SESSION['username']=$row->m_username;
					$_SESSION['status']=$row->m_status;
					$_SESSION['status2']=$row->m_status;
				}
			}
            
        }


    }
?>