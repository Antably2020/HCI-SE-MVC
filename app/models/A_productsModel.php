<?php
class A_productsModel extends model{
public $title="Products";


public function readProduct()
{
    $this->dbh->query("SELECT * FROM products");
    return $this->dbh->resultSet();
}
}
?>