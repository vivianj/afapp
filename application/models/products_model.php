<?php

class products_model extends CI_Model{

    function get_products(){     
        $this->db->select('*');
        $this->db->join('category', 'products.category_id=category.category_id');
        $q = $this->db->get('products');
        return $q->result();
    }
    
    function get_sweep_products(){
        $this->db->where('onsweep', 1);
        $this->db->select('*');
        $this->db->join('category', 'products.category_id=category.category_id');
        $q = $this->db->get('products');
        return $q->result();
    }
    
    function get_products_by_longskuid($long_sku_id){
        $this->db->where('long_sku_id', $long_sku_id);
        $q = $this->db->get('products');
        $ret = $q->result();
        return $ret[0];
    }
    
    function add_product($newProduct){
        $this->db->insert('products', $newProduct);
        return;
    }
    
    function update_product($long_sku_id, $product){
        $this->db->where('long_sku_id', $long_sku_id);
        $this->db->update('products', $product);
    }
    
    function delete_product($long_sku_id){
        $this->db->where('long_sku_id', $long_sku_id);
        $this->db->delete('products');
    }
}
?>
