
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

    

function deleteProduct($id) {

    $this->dbh->query( "DELETE FROM products WHERE id = :id ");
        $this->dbh->bind(':id', $id);
        
    return $this->dbh->execute();
}


}







?>

