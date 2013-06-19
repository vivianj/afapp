<?php

class users_model extends CI_Model{
    
    function get_user($username, $password){
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $q = $this->db->get('user_info');
        
        if($q->num_rows == 1){
            return $q->result();
        }else{
            return false;
        }
    }
}
?>
