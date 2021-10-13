<?php

class M_user extends CI_Model {
    
    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->order_by('id_user','desc');
        return $this->db->get()->result();
    }
    
 
}