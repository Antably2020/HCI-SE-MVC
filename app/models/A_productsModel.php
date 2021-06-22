<?php
class A_productsModel extends model{
public $title="Products";


    protected $featured;
    protected $Pname;
    protected $Pdescription;
    protected $Pprice;
    protected $id;


public function readProd()
{
    $this->dbh->query("SELECT * FROM products");
    return $this->dbh->resultSet();
}

    public function __construct()
    {
        parent::__construct();
        $this->Pname     = "";
        $this->Pdescription = "";
        $this->Pprice = "";
    }

    public function featured($featured)
    {
        $this->featured = $featured;
    }
    public function setPName($Pname)
    {
        $this->Pname = $Pname;
    }
    public function setDescription($Pdescription)
    {
        $this->Pdescription = $Pdescription;
    }
    public function setPprice($Pprice)
    {
        $this->Pprice = $Pprice;
    }
    public function setID($id){
        $this->id=$id;
    }
    public function getID(){
        return $this->id;
    }

    
public function Uproduct() {

    $this->dbh->query= "UPDATE products SET name = ':name' , price = ':pprice'  WHERE name = ':Pname' ";
  
    $this->dbh->bind(':pname', $this->Pname);
        $this->dbh->bind(':pdesciption', $this->Pdescription);
        $this->dbh->bind(':pprice', $this->Pprice);
    return $this->dbh->execute();

}
public function deleteProduct($ids) {
    
    $this->dbh->query= "DELETE  FROM products WHERE id = ':ids' ";
        $this->dbh->bind(':ids', $ids );
    return $this->dbh->execute();

    

}
}







?>

