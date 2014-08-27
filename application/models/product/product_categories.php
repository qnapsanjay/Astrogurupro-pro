<?php
class Product_categories extends CI_Model
{
    public function Registration()
        {
        parent::__construct();
        }
    public function index()
    {
        $this->db->select('id,name');
        $this->db->from('product_categories');
        $query = $this->db->get();
        if ($query->num_rows() >0)
            return $query->result();
          else
            return false;    
    }            
}