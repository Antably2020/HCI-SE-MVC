<?php 
class checkoutModel extends model{

  public $title="checkout model";    
  protected $userID;
  protected $productID;
  protected $productName;
  protected $fullname;
  protected $email;
  protected $phone;
  protected $city;
  protected $address;
  protected $street;
  protected $building;
  protected $floor;

  public function __construct()
  {
      parent::__construct();
      $this->userID   = "";
      $this->productID= "";
      $this->productName = "";
      $this->fullname = "";
      $this->email    = "";
      $this->phone    = "";
      $this->city     = "";
      $this->address  = "";
      $this->street   = "";
      $this->building = "";
      $this->floor    = "";
  }
//User ID  
  public function getuserID()
  {
      return $this->userID;
  }
  public function setuserID($userID)
  {
      $this->userID = $userID;
  }

//ProductID

  public function getproductID()
  {
      return $this->productID;
  }
  public function setproductID($productID)
  {
      $this->productID = $productID;
  }  


//Name
  public function getName()
  {
      return $this->fullname;
  }

  public function setName($fullname)
  {
      $this->fullname = $fullname;
  }

  //product Name
  public function getProductName()
  {
      return $this->fullname;
  }

  public function setProductName($fullname)
  {
      $this->fullname = $fullname;
  }


//Email   
  public function getemail()
  {
      return $this->email;
  }

  public function setemail($email)
  {
      $this->email = $email;
  }

//Phone
  public function getphone()
  {
      return $this->phone;
  }

  public function setphone($phone)
  {
      $this->phone = $phone;
  }

//City
   public function getcity()
  {
      return $this->city;
  }

  public function setcity($city)
  {
      $this->city = $city;
  }

//Address  
  public function getaddress()
  {
      return $this->address;
  }

  public function setaddress($address)
  {
      $this->address = $address;
  }

//Street
  public function getstreet()
  {
      return $this->street;
  }

  public function setstreet($street)
  {
      $this->street = $street;
  }

//Building
public function getbuilding()
{
    return $this->street;
}

public function setbuilding($building)
{
    $this->building = $building;
}


//Floor
public function getfloor()
{
    return $this->floor;
}

public function setfloor($floor)
{
    $this->floor = $floor;
}
                        

public function readcheckoutuser($userID)
{       
        $this->dbh->query('select * from cart where userID= :userID');
        $this->dbh->bind(':userID', $userID);
        return $this->dbh->resultSet(); 
}


public function readcheckoutproduct($id)
{ 
        $this->dbh->query('select * from products where id= :productID');
        $this->dbh->bind(':productID', $id);
        return $this->dbh->resultSet();   
}


public function checkout()
{       
    $this->dbh->query("INSERT INTO orders (productID,productName,userID,status,Fullname,Email,Phone,City,address,Street,Building,Floor) VALUES(:productID,:productName,:userID,,:thename, :email, :phone, :city, :address,:street,:building,:floor)");
    $this->dbh->bind(':productID', $this->productID);
    $this->dbh->bind(':productID', $this->productID);
    $this->dbh->bind(':userID', $this->userID);
    $this->dbh->bind(':thename', $this->fullname);
    $this->dbh->bind(':email', $this->email);
    $this->dbh->bind(':phone', $this->phone);
    $this->dbh->bind(':city', $this->city);
    $this->dbh->bind(':address', $this->address);
    $this->dbh->bind(':street', $this->street);
    $this->dbh->bind(':building', $this->building);
    $this->dbh->bind(':floor', $this->floor);
    return $this->dbh->execute(); 
}

}