<?php
require_once 'ProductDescriptionModel.php';
class ProductDescriptionModel extends model
{
    public  $title = 'ProductDescription';
    protected $productID;
    protected $category;
    
    public function getproductID()
    {
        return $this->productID;
    }
    public function setproductID($productID)
    {
        $this->productID = $productID;
    }

    public function getcategory()
    {
        return $this->category;
    }
    public function setcategory($category)
    {
        $this->category = $category;
    }

	public function readProd($id)   {
        
        $this->dbh->query('SELECT * from products where id= :id ' );
        $this->dbh->bind(':id', $id);
        return $this->dbh->resultSet();   
}

public function readrelativeProd($category){

    $this->dbh->query('SELECT * FROM products where category= :category');
    $this->dbh->bind(':category', $category);
    return $this->dbh->resultSet();
    
    }

    
}