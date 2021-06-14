<?php
require_once 'productsModel.php';
class CartModel extends model
{
    public  $title = 'Cart';
    public  function getprice()
    {
        $this->db->query("SELECT * FROM price*");
        return $this->db->resultSet();
    }

}