<?php
require_once 'ProductDescriptionModel.php';
class ProductDescriptionModel extends model
{
    public  $title = 'ProductDescription';
    protected $productID;
    
    
    public function getproductID()
    {
        return $this->productID;
    }
    public function setproductID($productID)
    {
        $this->productID = $productID;
    }

	public function readProd($id)   {
        
        $this->dbh->query('select * from products where id= :id ' );
        $this->dbh->bind(':id', $id);
        return $this->dbh->resultSet();   
}
    
}