<?php

class categories_model extends CI_Model{
    
    function get_categories(){
        $q = $this->db->get('category');
        return $q->result();
    }
}
?>
