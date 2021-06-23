<?php 
class checkoutModel extends model{

  public $title="checkout model";    
  protected $userID;
  protected $productID;
  protected $name;
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
      $this->productname = "";
      $this->name = "";
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

//productID

  public function getproductID()
  {
      return $this->productID;
  }
  public function setproductID($productID)
  {
      $this->productID = $productID;
  }  


//name
  public function getname()
  {
      return $this->fullname;
  }

  public function setname($fullname)
  {
      $this->fullname = $fullname;
  }

  //product name
  public function getProductname()
  {
      return $this->fullname;
  }

  public function setProductname($fullname)
  {
      $this->fullname = $fullname;
  }


//email   
  public function getemail()
  {
      return $this->email;
  }

  public function setemail($email)
  {
      $this->email = $email;
  }

//phone
  public function getphone()
  {
      return $this->phone;
  }

  public function setphone($phone)
  {
      $this->phone = $phone;
  }

//city
   public function getcity()
  {
      return $this->city;
  }

  public function setcity($city)
  {
      $this->city = $city;
  }

//address  
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

//building
public function getbuilding()
{
    return $this->street;
}

public function setbuilding($building)
{
    $this->building = $building;
}


//floor
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


public function Checkout()
{       
    $this->dbh->query("INSERT INTO `orders` (`productID`, `userID`, `status`, `Fullname`, `Email`, `Phone`, `City`, `address`, `Street`, `Building`, `Floor`, `id`) VALUES ('5', '1', '0', 'kareem', 'anas@gmail.com', '9846', 'cairo', 'cairo', 'x', '5', '5', NULL);");
    /*$this->dbh->bind(':productID', $this->productID);
    $this->dbh->bind(':userID', $this->userID);
    $this->dbh->bind(':name', $this->name);
    $this->dbh->bind(':email', $this->email);
    $this->dbh->bind(':phone', $this->phone);
    $this->dbh->bind(':city', $this->city);
    $this->dbh->bind(':address', $this->address);
    $this->dbh->bind(':street', $this->street);
    $this->dbh->bind(':building', $this->building);
    $this->dbh->bind(':floor', $this->floor);*/
    return $this->dbh->execute(); 
}

}