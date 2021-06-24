<?php
class profileModel extends model{
    public  $title = "Dashboard";
  
    protected $id;

  
    public function setID($id){
        $this->id=$id;
    }
    public function getID(){
        return $this->id;
    }


    
public function readuser($id)
{

    $this->dbh->query("SELECT * FROM users  WHERE id = :ids");
    $this->dbh->bind(':ids', $id);
    return $this->dbh->resultSet();
    
}



}
