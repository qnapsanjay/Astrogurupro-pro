<?php
class Product_list extends CI_Model
{
    public function Registration()
        {
        parent::__construct();
        }
    public function index($id)
    {
   $this->db->select('product_images.*,products.*');
  $this->db->from('products');
  $this->db->join('product_images','products.product_categories_id=product_images.id ');
  $this->db->where('products.product_categories_id', $id);
  $this->db->order_by('products.name');
  $query= $this->db->get();
      if ($query->num_rows() >0)
            return $query->result();
          else
            return false;    
    }            
    public function product_search($name)
    {
   $this->db->select('product_images.*,products.*');
  $this->db->from('products');
  $this->db->join('product_images','products.product_categories_id=product_images.id ');
  $this->db->where('products.name', $name);
  $this->db->order_by('products.name');
  $query= $this->db->get();
      if ($query->num_rows() >0)
            return $query->result();
          else
            return false;    
    }         
  }